<?php

namespace App\Controllers;
use App\Models\Objetivos;
use App\Models\ObjetivosDetalles;
use App\Models\Ofertas;
use App\Models\ContactType;
use App\Models\Destinos;
use App\Models\DestinoDetalles;
use App\Models\DestinosImagenes;
use App\Models\Equipo;
use App\Models\Contactos;
use App\Models\AditionalPages;
use App\Models\CategoriaOfertas;
use App\Models\Agents;
use App\Models\AgentsContacts;
use App\Models\News;
use \DateTime;
use \Exception;
use Config\Kint;

class Index extends BaseController {
  
  public function index() {
    $ofertas = [];
    $objetivosModel = new Objetivos();
    $objetivos = $objetivosModel->asObject()
      ->where('status', '1')
      ->where('lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    $objetivosDetallesModel = new ObjetivosDetalles();
    foreach ($objetivos as &$objetivo) {
      $objetivo->details = $objetivosDetallesModel->asObject()
        ->where('status', '1')
        ->where('objetivo_id', $objetivo->id)
        ->findAll()
      ; 
    }

    /*$db      = \Config\Database::connect();
    $ofertas = $db
      ->table('ofertas AS ot')
      ->select('ot.id, oc.id AS id_categoria, oc.categoria_slug, ot.oferta_slug, ot.oferta_titulo, ot.oferta_subtitulo, ot.oferta_favorita, ot.oferta_resumen, ot.oferta_file, ot.oferta_image, ot.oferta_orden, oc.categoria, oc.categoria_descripcion, ot.oferta_lang, oc.categoria_lang, ot.status, oc.status AS status_categoria, oc.created_at AS categoria_created_at, oc.updated_at AS categoria_updated_at, ot.created_at, ot.updated_at')
      ->join('categoria_ofertas AS oc', 'oc.id = ot.oferta_categoria AND ot.oferta_lang = oc.categoria_lang', 'INNER')
      ->where('ot.status', '1')
      ->where('oc.status', '1')
      ->where('ot.oferta_favorita', '1')
      ->where('ot.oferta_lang', $this->locale)
      ->where('oc.categoria_lang', $this->locale)
      ->orderBy('ot.oferta_orden', 'ASC')
      ->orderBy('ot.oferta_titulo', 'ASC')
      ->orderBy('ot.id', 'ASC')
      //->getCompiledSelect()
      ->get()
      ->getResult()
    ;
    foreach ($ofertas as &$oferta) {
      $ext = explode('.', $oferta->oferta_file);
      $ext = end($ext);
      $oferta->oferta_filename  = trim($oferta->oferta_titulo).'.'.$ext;
      $oferta->oferta_file  = base_url('files/'.strrev(str_replace('=', '', base64_encode($oferta->oferta_file))).'/'.strrev(str_replace('=', '', base64_encode($oferta->oferta_filename))));
      $oferta->oferta_image = base_url('files/'.strrev(str_replace('=', '', base64_encode($oferta->oferta_image))));
    }//*/
    $ofertasModel = new Ofertas();
    $categoriaOfertasModel = new CategoriaOfertas();
    $categories = $categoriaOfertasModel->asObject()
      ->where('status', '1')
      ->where('categoria_lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    foreach ($categories as &$category) {
      $category->categoria_image  = base_url('files/'.strrev(str_replace('=', '', base64_encode($category->categoria_image))).'/'.strrev(str_replace('=', '', base64_encode($category->categoria))));
      $category->cntOfertas = $ofertasModel->asObject()
        ->where('status', '1')
        ->where('oferta_categoria', $category->id)
        ->orderBy('id', 'ASC')
        ->countAllResults()
      ; 
    }
    /**
     * [$equipoModel description]
     * @var Equipo
     */
    /*$equipoModel = new Equipo();
    $equipos = $equipoModel->asObject()
      ->where('status', '1')
      ->where('equipo_lang', $this->locale)
      ->orderBy('orden', 'ASC')
      ->orderBy('id', 'ASC')
      ->findAll()
    ; 
    foreach ($equipos as &$equipo) {
      $equipo->equipo_image = base_url('files/'.strrev(str_replace('=', '', base64_encode($equipo->equipo_image))));
    }
    */
    $equipos = [];

    $newsModel = new News();
    $news = $newsModel->asObject()
      ->where('status', '1')
      ->where("(lang = '{$this->locale}' OR lang IS NULL)")
      ->orderBy('orden', 'ASC')
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    foreach ($news as &$new) {
      $new->photo = base_url('files/'.strrev(str_replace('=', '', base64_encode($new->photo))));
      $new->details = strlen($new->details) > 150 ? substr($new->details, 0, 147) . '...' : trim($new->details);
    } 

    $contacTypesModel = new ContactType();
    $contacTypes = $contacTypesModel->asObject()
      ->where('status', '1')
      ->where('lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ; 

    $agentsModel = new Agents();
    $agents = $agentsModel->asObject()
      ->where('status', '1')
      ->orderBy('orden', 'ASC')
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    $agentsContactsModel = new AgentsContacts();
    foreach ($agents as &$agent) {
      $agent->fullname = $agent->prefix. ' ' . $agent->firstname . ' ' . $agent->lastname;
      $agent->photo = base_url('files/'.strrev(str_replace('=', '', base64_encode($agent->photo))).'/'.strrev(str_replace('=', '', base64_encode(str_replace(['.', ' '], '_', $agent->fullname)))));
      $agent->contacts = $agentsContactsModel->asObject()
        ->where('status', '1')
        ->where('agent_id', $agent->id)
        ->orderBy('orden', 'ASC')
        ->orderBy('id', 'ASC')
        ->findAll()
      ; 
    }

    return view('index', [
      'locale' => $this->locale,
      'menuUrl' => false,
      'experienceYears' => $this->foudDiffDate->y,
      'objetivos' => $objetivos,
      'ofertas' => $ofertas,
      'categories' => $categories,
      'news' => $news,
      'equipos' => $equipos,
      'agents' => $agents,
      'cntDestinations' => $this->cntDestinations,
      'contacTypes' => $contacTypes,
    ]);
  }

  public function getFile($fileHash, $downloadName=null, $buffer=false) {
    try {
      $fileName = base64_decode(strrev($fileHash));
      $filePath = $this->basePath.$fileName;
      if(!file_exists($filePath)) {
        throw new Exception(lang('Doit.fileInvalid').' '.$fileHash);
      }
      if ($buffer) {
        header("Content-Type: ".mime_content_type($filePath));
        header("Content-Disposition: inline; filename=" . urlencode($fileName));
        header("Content-Description: File Transfer");
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header("Content-Length: " . filesize($filePath));
        flush(); // Not a must.
        $fp = fopen($filePath, "r");
        while (!feof($fp)) {
          echo fread($fp, 65536);
          flush(); // This is essential for large downloads
        }
        fclose($fp);
      } else {
        $response = $this->response->download($filePath, null);
        $response->setContentType(mime_content_type($filePath));
        if(!empty($downloadName)) {
          $downloadName = base64_decode(strrev($downloadName));
          $response->setFileName($downloadName);
        }
        $response->setHeader('Accept-Ranges', 'bytes');
        //$response->setHeader('Transfer-Encoding', 'chunked');
        //$response->setHeader('Content-Encoding', 'chunked');
        //$response->setHeader('Connection', 'keep-alive');
        return $response;
      }
    } catch (Exception $e) {
      return $this->response->setStatusCode(404, $e->getMessage());
    }
  }

  public function getAgentVcard($agentHash) {
    try {
      $agentId = base64_decode(strrev($agentHash));
      $agentsModel = new Agents();
      $agent = $agentsModel->asObject()
        ->where('id', $agentId)
        ->where('status', '1')
        ->orderBy('orden', 'ASC')
        ->orderBy('id', 'ASC')
        ->first()
      ;
      if($agent) {
        $agentsContactsModel = new AgentsContacts();
        $agent->contacts = $agentsContactsModel->asObject()
          ->where('status', '1')
          ->where('agent_id', $agent->id)
          ->orderBy('orden', 'ASC')
          ->orderBy('id', 'ASC')
          ->findAll()
        ; 
        $agent->fullname = $agent->prefix. ' ' . $agent->firstname . ' ' . $agent->lastname;
        $agent->basePhoto = $agent->photo;
        $agent->photo = base_url('files/'.strrev(str_replace('=', '', base64_encode($agent->photo))).'/'.strrev(str_replace('=', '', base64_encode(str_replace(['.', ' '], '_', $agent->fullname)))));
        $vcard = new \JeroenDesloovere\VCard\VCard();
        // add personal data
        $additional = '';
        $vcard->addName($agent->firstname, $agent->lastname, $additional, $agent->prefix, '');

        // add work data
        $vcard->addCompany(COMERCIALNAME);
        $vcard->addJobtitle($agent->cargo);
        $vcard->addRole($agent->cargo);
        $vcard->addNote($agent->details);
        $vcard->addLabel(COMPANY_LAT, 'latitude');
        $vcard->addLabel(COMPANY_LON, 'longitude');
        $vcard->addAddress(COMERCIALNAME, null, COMPANY_ADDRESS, COMPANY_LOCALITY, null, COMPANY_POSTAL_CODE, COMPANY_COUNTRY);
        $vcard->addCategories(explode(',', KEYWORDS));
        foreach ($agent->contacts as $keyCtc => $contact) {
          if($contact->tipo == 'phone') {
            $contact->contact_value = str_replace([' ', '.','-','(',')'], '', $contact->contact_value);
            $vcard->addPhoneNumber($contact->contact_value, 'WORK;VOICE');
          } else if($contact->tipo == 'movil') {
            $contact->contact_value = str_replace([' ', '.','-','(',')'], '', $contact->contact_value);
            $vcard->addPhoneNumber($contact->contact_value, 'PREF;CELL;MSG');
          } else if(in_array($contact->tipo, ['zoom', 'skype', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'viber', 'line'])) {
            $vcard->setProperty('socialProfile', $contact->tipo, $contact->contact_value);
          } else if($contact->tipo == 'email') {
            $vcard->addEmail($contact->contact_value);
          } else if($contact->tipo == 'whatsapp') {
            $contact->contact_value = str_replace([' ', '.','-','(',')'], '', $contact->contact_value);
            $vcard->addPhoneNumber($contact->contact_value, 'PREF;WORK;MSG');
          } else {
            $vcard->addLabel($contact->contact_value, $contact->tipo);
          }
        }
        $vcard->addURL(base_url());

        if(file_exists(FCPATH.LOGO)) {
          $vcard->addLogoContent(file_get_contents(FCPATH.LOGO));
        }

        if(file_exists(BASEPATH.'bucket/'.$agent->basePhoto)) {
          $vcard->addPhotoContent(file_get_contents(BASEPATH.'bucket/'.$agent->basePhoto));
        }
        // return vcard as a download
        return $vcard->download();
      }
      $this->response->setStatusCode(404, lang('Doit.pageNotFoundDesc'));
    } catch (Exception $e) {
      return $this->response->setStatusCode(404, $e->getMessage());
    }
  }

  public function saveContact() {
    $model = model(Contactos::class);
    $validation = $this->validate([
      'tipo'      => 'trim|required|min_length[5]|max_length[80]',
      'empresa'   => 'trim|required|min_length[10]|max_length[150]',
      'nombre'    => 'trim|required|min_length[10]|max_length[100]',
      'correo'    => 'trim|required|valid_email|min_length[3]|max_length[255]',
      'telefono'  => 'trim|required|min_length[7]|max_length[20]',
      'ciudad'    => 'trim|required|min_length[5]|max_length[200]',
      'asunto'    => 'trim|required|min_length[10]|max_length[200]',
      'mensaje'   => 'trim|required|min_length[30]|max_length[4000]',
      'token'     => 'trim|required',
      'action'    => 'trim|required',
    ]);
    $token = $this->request->getPost('token');
    $action = $this->request->getPost('action');
    $arrResponse = [];

    $rRCaptcha = self::validateReCaptcha($token, $action, $arrResponse);
    if($rRCaptcha) {
      if ($this->request->getMethod() === 'post' && $validation) {
        if($model->insert([
          'tipo'          => $this->request->getPost('tipo'),
          'empresa'       => $this->request->getPost('empresa'),
          'nombre'        => $this->request->getPost('nombre'),
          'telefono'      => $this->request->getPost('telefono'),
          'correo'        => $this->request->getPost('correo'),
          'ciudad'        => $this->request->getPost('ciudad'),
          'asunto'        => $this->request->getPost('asunto'),
          'lang'          => $this->locale,
          'mensaje'       => $this->request->getPost('mensaje'),
        ])) {
          $data = [
            'Tipo'        => $this->request->getPost('tipo'),
            'Empresa'     => $this->request->getPost('empresa'),
            'Nombre'      => $this->request->getPost('nombre'),
            'Correo'      => $this->request->getPost('correo'),
            'Telefono'    => $this->request->getPost('telefono'),
            'Ciudad'      => $this->request->getPost('ciudad'),
            'Asunto'      => $this->request->getPost('asunto'),
            'Fecha'       => date('d/m/Y'),
            'Hora'        => date('h:i:s a'),
            'Mensaje'     => $this->request->getPost('mensaje'),
            'Token'       => str_replace('=', '', base64_encode(date('Y-m-d H:i:s'))),
          ];
          $html = '';
          $html.= '<div style="text-align:justify;">';
          $html.= '<b>Tiene un contacto desde la Web:</b>';
          $html.= '<ul>';
          $html.= '<li><b>Tipo: </b>'.$this->request->getPost('tipo').'</li>';
          $html.= '<li><b>Empresa: </b>'.$this->request->getPost('empresa').'</li>';
          $html.= '<li><b>Nombre: </b>'.$this->request->getPost('nombre').'</li>';
          $html.= '<li><b>Correo: </b>'.$this->request->getPost('correo').'</li>';
          $html.= '<li><b>Telefono: </b>'.$this->request->getPost('telefono').'</li>';
          $html.= '<li><b>Ciudad: </b>'.$this->request->getPost('ciudad').'</li>';
          $html.= '<li><b>Asunto: </b>'.$this->request->getPost('asunto').'</li>';
          $html.= '<li><b>Fecha: </b>'.date('d/m/Y').'</li>';
          $html.= '<li><b>Hora: </b>'.date('h:i:s a').'</li>';
          $html.= '<li><b>Mensaje: </b>'.$this->request->getPost('mensaje').'</li>';
          $html.= '</ul>';
          $html.= '</div>';
          $url = "https://script.google.com/macros/s/AKfycbykIbixkeazEFkh--PFppwkOtmwssYiMp_S1UXEujlwyhw7Cg2f/exec?";
          $curl = curl_init($url);

          $options = [
            CURLOPT_URL => $url.http_build_query($data),
            CURLOPT_FAILONERROR => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)',
            CURLOPT_HTTPHEADER => [
              'Content-Type: application/json',
              'Access-Control-Allow-Origin: *',
            ],
            CURLOPT_POSTFIELDS => ''
          ];
          curl_setopt_array($curl, $options);

          $response = curl_exec($curl);
          $error = curl_error($curl);
          $info = curl_getinfo($curl);
          curl_close($curl);

          $config = (object) [
            'Subject' => lang('Doit.webContact'),
            'Subtitle' => $this->request->getPost('asunto'),
            'content' => $html,
            'to' => [
              TITLEAPP => CONTACT_EMAIL,
            ],
            'cc' => [
              //'Miguel Morales CEO' => 'mmoralesceo1706@gmail.com',
            ],
            'cco' => [
              SUPPORT_NAME => CONTACT_EMAIL_SUPPORT,
            ],
            'files' => [
            ],
            'embeddedFiles' => [
              'logo' => BASEPATH.'bucket/images/logo.png',
              'logo-facebook' => BASEPATH.'bucket/images/005-facebook.png',
              'logo-instagram' => BASEPATH.'bucket/images/006-instagram-logo.png',
              'logo-twitter' => BASEPATH.'bucket/images/004-twitter-logo.png',
              'logo-play' => BASEPATH.'bucket/images/002-play-button.png',
            ],
            'data' => [
              'locale' => $this->locale,
              'Subtitle' => $this->request->getPost('asunto'),
            ],
            'template' => 'emails/notification',
          ];
          $r = self::sendMail($config, $ErrorInfo);
          if($r) {
            session()->setFlashdata('success', lang('Doit.messageSent'));
            return $this->response->redirect('/', 'refresh');
          } else {
            $this->validator->setError('mensaje', $ErrorInfo);
          }
        } else {
          $errors = $model->errors();
          foreach ($errors as $field => $error) {
            $this->validator->setError($field, $error);
          }
        }
      }
    } else {
      foreach ($arrResponse['error-codes'] as $error) {
        $this->validator->setError('recaptcha', $error);
      }
    }
    return redirect('/')->withInput();
  }

  public function aboutUs() {
    defined('ADITIONAL_TITLE') || define('ADITIONAL_TITLE', lang('Doit.about_us'));
    $dtF = new DateTime(FOUND_DATE);
    $dtNow = new DateTime(date('Y-m-d'));
    $difDF = $dtNow->diff($dtF);
    $aditionalPagesModel = new AditionalPages();
    $aditionalPages = $aditionalPagesModel->asObject()
      ->where('status', '1')
      ->where('lang', $this->locale)
      ->whereIn('lCASE(slug)', ['sobre-nosotros', 'mision', 'vision'])
      ->orderBy('id', 'ASC')
      ->findAll()
    ;

    $destinosModel = new Destinos();
    $destinos = $destinosModel->asObject()
      ->where('status', '1')
      ->where('destino_lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->countAllResults()
    ; 
    $paramsView = [
      'locale' => $this->locale,
      'menuUrl' => true,
      'viewPart' => 'about-us',
      'cntDestinations' => $this->cntDestinations,
      'aditionalPages' => $aditionalPages,
      'experienceYears' => $difDF->y,
    ];
    return view('about-us', $paramsView);
  }

  public function aditionalPage($pageslug) {
    $dtF = new DateTime(FOUND_DATE);
    $dtNow = new DateTime(date('Y-m-d'));
    $difDF = $dtNow->diff($dtF);
    $aditionalPagesModel = new AditionalPages();
    $aditionalPages = $aditionalPagesModel->asObject()
      ->where('status', '1')
      ->where('lang', $this->locale)
      ->where('lCASE(slug)', strtolower($pageslug))
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    if(count($aditionalPages) > 0) {
      defined('ADITIONAL_TITLE') || define('ADITIONAL_TITLE', $aditionalPages[0]->title);
    }
    return view('about-us', [
      'locale' => $this->locale,
      'menuUrl' => true,
      'viewPart' => 'aditional-pages',
      'cntDestinations' => $this->cntDestinations,
      'aditionalPages' => $aditionalPages,
      'experienceYears' => $difDF->y,
    ]);
  }

  public function getCharterOffer() {
    $dtF = new DateTime(FOUND_DATE);
    $dtNow = new DateTime(date('Y-m-d'));
    $difDF = $dtNow->diff($dtF);

    $contacTypesModel = new ContactType();
    $contacTypes = $contacTypesModel->asObject()
      ->where('status', '1')
      ->where('lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ; 
    $charterTitle = 'Santa Clara, Ciudad y Playa';
    $fileCharter = '/assets/images/project/curent_charter.jpg';
    $rawBodyEmail = rawurlencode('Hola, <span style="color:#ff7f00;">' . COMERCIALNAME . '</span>!<br><br>Envio los documentos adjuntos y la información sobre la reserva para el charter:<br><b>'.$charterTitle.'</b><br><br>Un Saludo.<br>--<br>');
    defined('ADITIONAL_TITLE') || define('ADITIONAL_TITLE', 'Charter ' . $charterTitle);
    return view('about-us', [
      'locale' => $this->locale,
      'menuUrl' => true,
      'viewPart' => 'charter-page',
      'cntDestinations' => $this->cntDestinations,
      'experienceYears' => $difDF->y,
      'contacTypes' => $contacTypes,
    ]);
  }

  public function allOffers() {
    $dtF = new DateTime(FOUND_DATE);
    $dtNow = new DateTime(date('Y-m-d'));
    $difDF = $dtNow->diff($dtF);

    $db      = \Config\Database::connect();
    $offers = $db
      ->table('ofertas AS ot')
      ->select('ot.id, oc.id AS id_categoria, oc.categoria_slug, ot.oferta_slug, ot.oferta_titulo, ot.oferta_subtitulo, ot.oferta_favorita, ot.oferta_resumen, ot.oferta_file, ot.oferta_image, ot.oferta_orden, oc.categoria, oc.categoria_descripcion, ot.oferta_lang, oc.categoria_lang, ot.status, oc.status AS status_categoria, oc.created_at AS categoria_created_at, oc.updated_at AS categoria_updated_at, ot.created_at, ot.updated_at')
      ->join('categoria_ofertas AS oc', 'oc.id = ot.oferta_categoria AND ot.oferta_lang = oc.categoria_lang', 'INNER')
      ->where('ot.status', '1')
      ->where('oc.status', '1')
      ->where('ot.oferta_lang', $this->locale)
      ->where('oc.categoria_lang', $this->locale)
      ->orderBy('ot.oferta_orden', 'ASC')
      ->orderBy('ot.oferta_titulo', 'ASC')
      ->orderBy('ot.id', 'ASC')
      //->getCompiledSelect()
      ->get()
      ->getResult()
    ;

    foreach ($offers as &$offer) {
      $ext = explode('.', $offer->oferta_file);
      $ext = end($ext);
      $offer->oferta_filename  = trim($offer->oferta_titulo).'.'.$ext;
      $offer->oferta_file  = base_url('files/'.strrev(str_replace('=', '', base64_encode($offer->oferta_file))).'/'.strrev(str_replace('=', '', base64_encode($offer->oferta_filename))));
      $offer->oferta_image = base_url('files/'.strrev(str_replace('=', '', base64_encode($offer->oferta_image))));
    }
    defined('ADITIONAL_TITLE') || define('ADITIONAL_TITLE', lang('Doit.all_offers'));    
    return view('about-us', [
      'locale' => $this->locale,
      'menuUrl' => true,
      'viewPart' => 'all-offers',
      'cntDestinations' => $this->cntDestinations,
      'offers' => $offers,
      'experienceYears' => $difDF->y,
    ]);
  }

  public function allDestinations() {
    $dtF = new DateTime(FOUND_DATE);
    $dtNow = new DateTime(date('Y-m-d'));
    $difDF = $dtNow->diff($dtF);
    $destinosModel = new Destinos();
    $destinos = $destinosModel->asObject()
      ->where('status', '1')
      ->where('destino_lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ;

    foreach ($destinos as &$destino) {
      $destino->destino_image = base_url('files/'.strrev(str_replace('=', '', base64_encode($destino->destino_image))));
    }
    defined('ADITIONAL_TITLE') || define('ADITIONAL_TITLE', lang('Doit.all_destinations'));
    return view('about-us', [
      'locale' => $this->locale,
      'menuUrl' => true,
      'viewPart' => 'all-destinos',
      'cntDestinations' => $this->cntDestinations,
      'destinos' => $destinos,
      'experienceYears' => $difDF->y,
    ]);
  }

  public function getDestination($pageslug) {
    $dtF = new DateTime(FOUND_DATE);
    $dtNow = new DateTime(date('Y-m-d'));
    $difDF = $dtNow->diff($dtF);
    $destinosModel = new Destinos();
    $destino = $destinosModel->asObject()
      ->where('status', '1')
      ->where('destino_lang', $this->locale)
      ->where('destino_slug', $pageslug)
      ->orderBy('id', 'ASC')
      ->first()
    ;
    $contacTypes = null;

    if($destino) {
      $destino->destino_image = base_url('files/'.strrev(str_replace('=', '', base64_encode($destino->destino_image))));
      $detalleModel = new DestinoDetalles();
      $imagenesModel = new DestinosImagenes();
      $destino->detalle = $detalleModel->asObject()
        ->where('status', '1')
        ->where('destino_id', $destino->id)
        ->orderBy('id', 'ASC')
        ->first()
      ;
      $destino->imagenes = $imagenesModel->asObject()
        ->where('status', '1')
        ->where('destino_id', $destino->id)
        ->orderBy('id', 'ASC')
        ->findAll()
      ;
      foreach ($destino->imagenes as &$imagen) {
        if($imagen->recurso_tipo_destino == 'local') {
          $imagen->recurso = base_url('files/'.strrev(str_replace('=', '', base64_encode($imagen->recurso))));
        }
      }
      $contacTypesModel = new ContactType();
      $contacTypes = $contacTypesModel->asObject()
        ->where('status', '1')
        ->where('lang', $this->locale)
        ->orderBy('id', 'ASC')
        ->findAll()
      ; 
      defined('ADITIONAL_TITLE') || define('ADITIONAL_TITLE', lang('Doit.destination') . ' ' . ($destino->destino_titulo ?? '404'));
    }
    return view('show-destination', [
      'locale' => $this->locale,
      'menuUrl' => true,
      'viewPart' => 'aditional-pages',
      'cntDestinations' => $this->cntDestinations,
      'contacTypes' => $contacTypes,
      'destino' => $destino,
      'experienceYears' => $difDF->y,
    ]);
  }

  public function getOferta($categoria=null,$oferta=null) {
    $dtF = new DateTime(FOUND_DATE);
    $dtNow = new DateTime(date('Y-m-d'));
    $difDF = $dtNow->diff($dtF);
    $offers = [];
    $categories = [];

    if(!empty($categoria) || !empty($oferta)) {
      $db      = \Config\Database::connect();
      $offers = $db
        ->table('ofertas AS ot')
        ->select('ot.id, oc.id AS id_categoria, oc.categoria_slug, ot.oferta_slug, ot.oferta_titulo, ot.oferta_subtitulo, ot.oferta_favorita, ot.oferta_resumen, ot.oferta_file, ot.oferta_image, ot.oferta_orden, oc.categoria, oc.categoria_descripcion, ot.oferta_lang, oc.categoria_lang, ot.status, oc.status AS status_categoria, oc.created_at AS categoria_created_at, oc.updated_at AS categoria_updated_at, ot.created_at, ot.updated_at')
        ->join('categoria_ofertas AS oc', 'oc.id = ot.oferta_categoria AND ot.oferta_lang = oc.categoria_lang', 'INNER')
        ->where('ot.status', '1')
        ->where('oc.status', '1')
        ->where('ot.oferta_lang', $this->locale)
        ->where('oc.categoria_lang', $this->locale);
      if(!empty($categoria)) {
        $offers = $offers->where('oc.categoria_slug', $categoria);
      }
      if(!empty($oferta)) {
        $offers = $offers->where('ot.oferta_slug', $oferta);
      }
      $offers = $offers->orderBy('ot.oferta_orden', 'ASC')
        ->orderBy('ot.oferta_titulo', 'ASC')
        ->orderBy('ot.id', 'ASC')
        //->getCompiledSelect()
        ->get()
        ->getResult()
      ;

      foreach ($offers as &$offer) {
        $ext = explode('.', $offer->oferta_file);
        $filePath = $this->basePath.$offer->oferta_file;
        $ext = end($ext);
        $offer->oferta_filename  = trim($offer->oferta_titulo).'.'.$ext;
        $offer->oferta_fileextension  = $ext;
        $offer->oferta_fileMimeType  = file_exists($filePath) && !empty($oferta) ?  mime_content_type($filePath) : 'text/html';
        $offer->oferta_file  = base_url('files/'.strrev(str_replace('=', '', base64_encode($offer->oferta_file))).'/'.strrev(str_replace('=', '', base64_encode($offer->oferta_filename))));
        $offer->oferta_image = base_url('files/'.strrev(str_replace('=', '', base64_encode($offer->oferta_image))));
      }
      $categoriaOfertasModel = new CategoriaOfertas();
      $categories = $categoriaOfertasModel->asObject()
        ->where('status', '1')
        ->where('categoria_lang', $this->locale)
        ->where('categoria_slug', $categoria)
        ->orderBy('id', 'ASC')
        ->first()
      ;
    }

    $contacTypesModel = new ContactType();
    $contacTypes = $contacTypesModel->asObject()
      ->where('status', '1')
      ->where('lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ; 

    if(empty($categoria) && empty($oferta)) {
      //Mostrar todas las categorias
      //show-offers-categories
      $categoriaOfertasModel = new CategoriaOfertas();
      $categories = $categoriaOfertasModel->asObject()
        ->where('status', '1')
        ->where('categoria_lang', $this->locale)
        ->orderBy('id', 'ASC')
        ->findAll()
      ;
      defined('ADITIONAL_TITLE') || define('ADITIONAL_TITLE', lang('Doit.offers') . ' ' . lang('Doit.all_categories'));
      
      return view('show-offers-categories', [
        'locale' => $this->locale,
        'menuUrl' => true,
        'viewPart' => 'offers-categories',
        'cntDestinations' => $this->cntDestinations,
        'categories' => $categories,
        'contacTypes' => $contacTypes,
        'experienceYears' => $difDF->y,
      ]);
    } else if(!empty($categoria) && empty($oferta)) {
      //Mostrar todas las ofertas de la categoria
      defined('ADITIONAL_TITLE') || define('ADITIONAL_TITLE', lang('Doit.offers') . ' ' . ($categories->categoria ?? '404'));
      return view('show-offers-bycategories', [
        'locale' => $this->locale,
        'menuUrl' => true,
        'viewPart' => 'offers-bycategories',
        'cntDestinations' => $this->cntDestinations,
        'contacTypes' => $contacTypes,
        'category' => $categories,
        'offers' => $offers,
        'experienceYears' => $difDF->y,
      ]);
    } else if(!empty($categoria) && !empty($oferta)) {
      //Mostrar as ofertas seleccionada
      if($offers && is_array($offers) && count($offers) > 0) {
        $offers = $offers[0];
      }
      $contentScripts = '';
      if(strstr($offer->oferta_fileMimeType, 'image')) {
        $contentScripts = "$('#docpdf.docpdf').html('<img alt=\"" . $offer->oferta_titulo . "\" src=\"" . $offer->oferta_file . "/true\" data-image=\"" . $offer->oferta_file . "\" data-description=\"" . (!empty($offer->oferta_subtitulo) ? str_replace($replaceViewValues->find2Replace, $replaceViewValues->replace2Found, $offer->oferta_subtitulo) : '') ."\">');";
      }
      if(strstr($offer->oferta_fileMimeType, 'pdf')) { 
        $contentScripts = "$('#docpdf.docpdf').html('<object data=\"" . $offer->oferta_file ."/true\" type=\"" . $offer->oferta_fileMimeType ."\" width=\"100%\" height=\"700px\"></object>');";
      }
      if(strstr($offer->oferta_fileMimeType, 'video')) { 
        $contentScripts = "$('#docpdf.docpdf').html('<video preload=\"auto\" width=\"320\" height=\"240\" controls><source src=\"" . $offer->oferta_file . "/true\" type=\"" . $offer->oferta_fileMimeType . "\"></video>');";
      }
      defined('ADITIONAL_TITLE') || define('ADITIONAL_TITLE', lang('Doit.offer') . ' ' . ($offers->oferta_titulo ?? '404'));
      return view('show-offer-detail', [
        'locale' => $this->locale,
        'menuUrl' => true,
        'viewPart' => 'offers-bycategories',
        'cntDestinations' => $this->cntDestinations,
        'contacTypes' => $contacTypes,
        'category' => $categories,
        'offer' => $offers,
        'experienceYears' => $difDF->y,
        'contentScripts' => $contentScripts,
      ]);
    }

    return view('show-destination', [
      'locale' => $this->locale,
      'menuUrl' => true,
      'viewPart' => 'aditional-pages',
      'cntDestinations' => $this->cntDestinations,
      'contacTypes' => $contacTypes,
      'destino' => $destino,
      'experienceYears' => $difDF->y,
    ]);
  }
}
  