<?php

namespace App\Controllers;
use App\Models\Objetivos;
use App\Models\ObjetivosDetalles;
use App\Models\Ofertas;
use App\Models\ContactType;
use App\Models\Destinos;
use App\Models\Equipo;
use App\Models\Contactos;
use App\Models\AditionalPages;
use \DateTime;
use \Exception;
use Config\Kint;

class Index extends BaseController {
  
  public function index() {
    $objetivosModel = new Objetivos();
    $objetivos = $objetivosModel->asObject('App\Models\Objetivos')
      ->where('status', '1')
      ->where('lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    $objetivosDetallesModel = new ObjetivosDetalles();
    foreach ($objetivos as &$objetivo) {
      $objetivo->details = $objetivosDetallesModel->asObject('App\Models\ObjetivosDetalles')
        ->where('status', '1')
        ->where('objetivo_id', $objetivo->id)
        ->orderBy('id', 'ASC')
        ->findAll()
      ; 
    }
    $ofertasModel = new Ofertas();
    $ofertas = $ofertasModel->asObject()
      ->where('status', '1')
      ->where('oferta_lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ; 
    foreach ($ofertas as &$oferta) {
      $ext = explode('.', $oferta->oferta_file);
      $ext = end($ext);
      $oferta->oferta_filename  = trim($oferta->oferta_titulo).'.'.$ext;
      $oferta->oferta_file  = base_url('files/'.strrev(str_replace('=', '', base64_encode($oferta->oferta_file))).'/'.strrev(str_replace('=', '', base64_encode($oferta->oferta_filename))));
      $oferta->oferta_image = base_url('files/'.strrev(str_replace('=', '', base64_encode($oferta->oferta_image))));
    }
    $equipoModel = new Equipo();
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
    $contacTypesModel = new ContactType();
    $contacTypes = $contacTypesModel->asObject()
      ->where('status', '1')
      ->where('lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ; 
    return view('index', [
      'locale' => $this->locale,
      'menuUrl' => false,
      'experienceYears' => $this->foudDiffDate->y,
      'objetivos' => $objetivos,
      'ofertas' => $ofertas,
      'equipos' => $equipos,
      'cntDestinations' => $this->cntDestinations,
      'contacTypes' => $contacTypes,
    ]);
  }

  public function getFile($fileHash, $downloadName=null) {
    try {
      $fileName = base64_decode(strrev($fileHash));
      $filePath = $this->basePath.$fileName;
     if(!file_exists($filePath)) {
        throw new Exception(lang('Doit.fileInvalid').' '.$fileHash);
      }
      $response = $this->response->download($filePath, null);
      if(!empty($downloadName)) {
        $downloadName = base64_decode(strrev($downloadName));
        $response->setFileName($downloadName);
      }
      return $response;
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

    return view('about-us', [
      'locale' => $this->locale,
      'menuUrl' => true,
      'viewPart' => 'aditional-pages',
      'cntDestinations' => $this->cntDestinations,
      'aditionalPages' => $aditionalPages,
      'experienceYears' => $difDF->y,
    ]);
  }
}
