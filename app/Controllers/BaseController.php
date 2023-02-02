<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Mimes;
use Psr\Log\LoggerInterface;
use App\Models\Parameters;
use App\Models\AgencyType;
use App\Models\Objetivos;
use App\Models\ObjetivosDetalles;
use App\Models\Ofertas;
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
use App\Models\Geleria;
use App\Models\ContactType;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use \DateTime;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller {
  /**
   * Instance of the main Request object.
   *
   * @var CLIRequest|IncomingRequest
   */
  protected $request;
  protected $locale;
  protected $basePath;
  protected $session;
  protected $encryption;
  protected $foudDateTime;
  protected $foudDiffDate;
  public $viewParams = [];
  protected $cntDestinations;
  protected $cntOffers;

  /**
   * An array of helpers to be loaded automatically upon
   * class instantiation. These helpers will be available
   * to all other controllers that extend BaseController.
   *
   * @var array
   */
  protected $helpers = ['url', 'form'];

  /**
   * Constructor.
   */
  public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) {
      // Do Not Edit This Line
      parent::initController($request, $response, $logger);
      $this->locale = 'es'; //$this->request->getLocale();
      $this->basePath = realpath(__DIR__.'/../..').DIRECTORY_SEPARATOR.'bucket'.DIRECTORY_SEPARATOR;
      self::getParameterApp($this->locale);

      $destinosModel = new Destinos();
      $this->cntDestinations = $destinosModel->asObject()
        ->where('status', 'ACTIVE')
        ->where('lang', $this->locale)
        ->orderBy('id', 'ASC')
        ->countAllResults()
      ;

      $offersModel = new Ofertas();
      $this->cntOffers = $offersModel->asObject()
        ->where('status', 'ACTIVE')
        ->where('lang', $this->locale)
        ->orderBy('id', 'ASC')
        ->countAllResults()
      ;

      $offersModel = new Ofertas();
      $this->cntOffers = $offersModel->asObject()
        ->where('status', 'ACTIVE')
        ->where('lang', $this->locale)
        ->orderBy('id', 'ASC')
        ->countAllResults()
      ; 
      $this->foudDateTime = new DateTime(FOUND_DATE);
      $dtNow = new DateTime(date('Y-m-d'));
      $this->foudDiffDate = $dtNow->diff($this->foudDateTime);
      $this->session = \Config\Services::session();
      $this->encryption = new \Config\Encryption();
      $this->session->start();
      
      /*
      $config = (object) [
        'Subject' => 'Coreo de Pruebas',
        'Subtitle' => 'Subtitulo del correo',
        'content' => '<p>Este es el cuerpo del correo, <b>Prueba</b></p>',
        'to' => [
          'Miguel Angel Morales' => 'miguelmoralescoterio@gmail.com',
          //'Luisa Correa' => 'luisscorrea031@gmail.com',
          //'Luisa Correa.' => 'luisacorrea031@hotmail.com',
          //'Katiuska Villalobos' => 'katyk.18.2011@gmail.com',
        ],
        'cc' => [
          //'Miguel Morales CEO' => 'mmoralesceo1706@gmail.com',
        ],
        'cco' => [
          //'Miguel Angel' => 'miguelangelmorales1706@gmail.com'
        ],
        'files' => [
          BASEPATH.'bucket/ofertas/HV5N.png',
          BASEPATH.'bucket/ofertas/HV7N.pdf',
        ],
        'embeddedFiles' => [
          'logo' => BASEPATH.'bucket/images/logo.png',
          'logo-facebook' => BASEPATH.'bucket/images/005-facebook.png',
          'logo-instagram' => BASEPATH.'bucket/images/006-instagram-logo.png',
          'logo-twitter' => BASEPATH.'bucket/images/004-twitter-logo.png',
          'logo-play' => BASEPATH.'bucket/images/002-play-button.png',
          'background-img' => BASEPATH.'public/assets/images/banner/banner-image.png',
        ],
        'data' => [
          'locale' => $this->locale,
        ],
        'template' => 'emails/notification',
      ];
      $r = self::sendMail($config, $ErrorInfo);
      echo '<pre>'.print_r([
        'r' => $r,
        'config' => $config,
        'ErrorInfo' => $ErrorInfo,
      ], true);
      die();
      */
    $this->viewParams = [
      'noBanner'        => true,
      'menuUrl'         => false,
      'locale'          => $this->locale,
      'experienceYears' => $this->foudDiffDate->y,
      'cntDestinations' => $this->cntDestinations,
      'cntOffers'       => $this->cntOffers,
      'contentScripts'  => '',
      'statusCode'      => 200,
      'aditionalTitle'  => null,
    ];
  }

  public static function validateReCaptcha($token, $action, &$arrResponse =[]) {
      $ret = false;
      // call curl to POST request
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret'   => GOOGLE_RECAPTCHA_SITEVERIFY, 
        'response' => $token,
        'remoteip' => \CodeIgniter\Config\Services::request()->getIPAddress(), 
      ]));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);
      $arrResponse = json_decode($response, true);
      // verify the response
      if($arrResponse['success'] == true && $arrResponse['action'] == $action && $arrResponse['score'] >= 0.8) {
          $ret = true;
      } else {
          foreach($arrResponse['error-codes'] as &$errMsg) {
              $errMsg = lang('Doit.'.$errMsg);
          }
      }
      return $ret;
  } 

  /**
   * [requestApi description]
   * @param  [type]  $url         [description]
   * @param  [type]  $postData    [description]
   * @param  string  $method      [description]
   * @param  array   $curlOpts    [description]
   * @param  array   $headers     [description]
   * @param  [type]  &$resultado  [description]
   * @param  boolean $jsonConvert [description]
   * @param  boolean $verbose     [description]
   * @return [type]               [description]
   */
  public static function requestApi($url, $postData, &$resultado=null, $method = 'POST', $curlOpts=array(), $headers=array(), $jsonConvert=true, $verbose = false) {
    try {
      $config            = clone config('App');
      $baseURL = rtrim($config->apiBaseUrl, '/') . '/';
      if(!$url || empty($url)) throw new Exception("Url {$url} invalida o vacia", 1);
      if(!is_array($curlOpts)) throw new Exception("curlOpts No es de tipo array", 1);
      $url = $baseURL . $url;
      if(!$resultado || !is_array($resultado)) $resultado = array();

      $curl  = curl_init();
      $error = false;
      if($verbose) {        
        $fl = fopen(realpath(__DIR__.'/../..').'/writable/logs/logApi-'.(time()).(!empty($tailLogFile)?'-'.$tailLogFile:'').'.log', 'a+');
        fwrite($fl, PHP_EOL.PHP_EOL."INICIO DE REQUEST".PHP_EOL.PHP_EOL);
      }

      $arrHeaders = [
        'Content-Type: application/json; charset=utf-8;',
        'Connection: Keep-Alive',
        'Accept: application/json; charset=utf-8;',
        'x-request-ip: ' . \CodeIgniter\Config\Services::request()->getIPAddress(),
        'x-request-url: ' . current_url(),
      ];

      $session = \Config\Services::session();
      $token = $session->get('token');
      if(!empty($token)) {
        $arrHeaders[] = 'Authorization: OlimpusS ' . $token;
        $arrHeaders[] = 'Proxy-Authorization: OlimpusS ' . $token;
        $arrHeaders[] = 'X-Olimpus-Auth: OlimpusS ' . $token;
      }

      if(count($headers) > 0) {
        $arrHeaders = array_merge($arrHeaders, $headers);
      }
      $opts = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => $method == 'POST',
        CURLOPT_PROXY => false,
        CURLOPT_HEADER => true,
        CURLOPT_VERBOSE => false,
        CURLOPT_ENCODING => 'utf-8',
        CURLOPT_USERAGENT => 'Web Admin Doit v2',
        CURLOPT_HTTPHEADER => $arrHeaders,
        CURLOPT_POSTFIELDS => json_encode($postData),
        CURLOPT_AUTOREFERER => true,
        CURLOPT_FAILONERROR => false,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTP200ALIASES => array(400, 401, 402, 403, 404, 405, 500, 501, 502, 503, 504, 505),
      );

      if(count($curlOpts) > 0) {
        foreach ($curlOpts as $key => $value) {
          $opts[$key] = $value;
        }
      }

      if($verbose) {
        $opts[CURLOPT_VERBOSE] = true;
        $opts[CURLOPT_STDERR] = $fl;
      }

      curl_setopt_array($curl, $opts);
      $resultado['response']      = curl_exec ($curl);
      $resultado['header_size']   = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
      $resultado['header']        = substr($resultado['response'], 0, $resultado['header_size']);
      $resultado['response']      = substr($resultado['response'], $resultado['header_size']);
      $resultado['response_size'] = mb_strlen($resultado['response'], '8bit');
      $resultado['url']           = $url;
      $resultado['efective_url']  = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);
      $resultado['params']        = $postData;
      $totaltime                  = curl_getinfo($curl, CURLINFO_TOTAL_TIME);
      $resultado['httpcode']      = curl_getinfo($curl, CURLINFO_HTTP_CODE);
      $resultado['error']         = curl_error($curl);
      //$resultado['opts']          = $opts;
      $resultado['resLog']        =  array(
        'efective_url' => $resultado['efective_url'],
        'response_size' => $resultado['response_size'],
        'header_size' => $resultado['header_size'],
        'httpcode' => $resultado['httpcode'],
      );
      if($totaltime > 5) {
        $resultado['resLog']['timesdetails'] = array(
          'TOTALTIME'           => round($totaltime, 2).' segs',
          //'APPCONNECT_TIME'   => round(curl_getinfo($curl, CURLINFO_APPCONNECT_TIME), 4),
          'NAMELOOKUP_TIME'     => round(curl_getinfo($curl, CURLINFO_NAMELOOKUP_TIME), 4).' segs',
          'CONNEC_TIME'         => round(curl_getinfo($curl, CURLINFO_CONNECT_TIME), 4).' segs',
          'PRETRANSFER_TIME'    => round(curl_getinfo($curl, CURLINFO_PRETRANSFER_TIME), 4).' segs',
          'STARTTRANSFER_TIME'  => round(curl_getinfo($curl, CURLINFO_STARTTRANSFER_TIME), 4).' segs',
          'REDIRECT_TIME'       => round(curl_getinfo($curl, CURLINFO_REDIRECT_TIME), 4).' segs',
          'SIZE_UPLOAD'         => curl_getinfo($curl, CURLINFO_SIZE_UPLOAD),
          'SIZE_DOWNLOAD'       => curl_getinfo($curl, CURLINFO_SIZE_DOWNLOAD),
          'SPEED_UPLOAD'        => curl_getinfo($curl, CURLINFO_SPEED_UPLOAD),
          'SPEED_DOWNLOAD'      => curl_getinfo($curl, CURLINFO_SPEED_DOWNLOAD),
        );
      }
      curl_close ($curl);      
      if($verbose) {
        fwrite($fl, PHP_EOL.PHP_EOL."FIN DE REQUEST".PHP_EOL.PHP_EOL.PHP_EOL);
      }
      if($resultado['httpcode'] != 200 || !empty($resultado['error']) || $resultado['response'] === false || empty($resultado['httpcode'])) {
        $error = true;
      }
      if($resultado['httpcode'] == 0) {
        $error = true; 
        $resultado['response'] = '{"success": false, "result":null, "message":"Servicio no disponible: 503"}';
      }
      if($jsonConvert) {
        $resultado['response'] = json_decode($resultado['response'], false);
      }
      return !$error ? $resultado['response'] : false;
    } catch (Exception $e) {
      $resultado['error'] = $e->getMessage().'  =>  '.$e->getFile().':'.$e->getLine();
      return false;
    }
  }

  public static function sendMail(object $config=null, &$ErrorInfo=''): bool {
    $send = false;
    try {
      $email = config('Email');
      $app = config('App');
      $request = service('request');
      $mailer = new PHPMailer();
      $mailer->isSMTP(true);
      $mailer->SMTPDebug    = $request->getGetPost('debug') ?? $email->SMTPDebug;
      $mailer->Debugoutput  = $email->Debugoutput;
      $mailer->SMTPSecure   = $email->SMTPCrypto;
      $mailer->SMTPAuth     = $email->SMTPAuth;
      $mailer->Host         = $email->SMTPHost;
      $mailer->Port         = $email->SMTPPort;
      $mailer->Username     = $email->SMTPUser;
      $mailer->Password     = base64_decode($email->SMTPPass);
      $mailer->Address      = $email->fromEmail;
      $mailer->From         = $email->fromEmail;
      $mailer->FromName     = $email->fromName;
      $mailer->Sender       = $email->fromEmail;
      $mailer->Priority     = $email->priority;
      $mailer->CharSet      = $email->charset;
      $mailer->ContentType  = $email->mailType;
      $mailer->Timeout      = $email->SMTPTimeout;
      $mailer->Encoding     = $email->Encoding ?? '7bit';
      $mailer->WordWrap     = $email->wordWrap ? $email->wrapChars : 0;
      $mailer->XMailer      = $email->userAgent;
      $mailer->SMTPKeepAlive= $email->SMTPKeepAlive;

      $mailer->addCustomHeader('X-Send-From', $request->uri->getHost());
      $mailer->addCustomHeader('X-App', $app->appName);
      $host = explode('@', $mailer->From);
      $host = end($host);
      $mailer->MessageID = '<'.strrev(str_replace('=', '', base64_encode($request->getIPAddress().'.'.$request->uri->getHost().'.'.date('Y-m-d H:i:s')))).'@'.$host.'>';

      $logPath = rtrim(WRITEPATH, '/').'/messagesId/';
      if(!is_dir($logPath) || !file_exists($logPath)) {
        @mkdir($logPath, 0777, true);
      }

      if($request->getGetPost('sendNotifTo')) {
        $config->to = explode(',', $request->getGetPost('sendNotifTo'));
      } else {
        $config->to = is_string($config->to) ? explode(',', $config->to) : $config->to;
        if(isset($config->cc)) {
          $config->cc = is_string($config->cc) ? explode(',', $config->cc) : $config->cc;
          foreach ($config->cc as $name => $dest) {
            if(is_int($name)) {
              $name = explode("@", $dest);
              $name = $name[0];
            }
            $mailer->addCC($dest, $name);
          }
        }

        if(isset($config->cco)) {
          $config->cco = is_string($config->cco) ? explode(',', $config->cco) : $config->cco;
          foreach ($config->cco as $name => $dest) {
            if(is_int($name)) {
              $name = explode("@", $dest);
              $name = $name[0];
            }
            $mailer->addBCC($dest, $name);
          }
        }
      }

      foreach ($config->to as $name => $dest) {
        if(is_int($name)) {
          $name = explode("@", $dest);
          $name = $name[0];
        }
        $mailer->addAddress($dest, $name);
      }

      $mailer->addBCC($email->fromEmail, $email->fromName);

      if(isset($config->embeddedFiles) && is_array($config->embeddedFiles)) {     
        foreach ($config->embeddedFiles as $cid => $file) {
          echo '<pre>embeddedFiles: '.$file.' : '.(file_exists($file)?'Existe':'NO EXISTE').'</pre>';
          if(file_exists($file)) {
            if(is_int($cid)) {
              $cid = basename($file);
            }
            $mailer->addEmbeddedImage($file, $cid, basename($file), PHPMailer::ENCODING_BASE64,'', 'inline');
          }
        }
      }

      if(isset($config->files) && is_array($config->files)) {     
        foreach ($config->files as $name => $file) {
          echo '<pre>files: '.$file.' : '.(file_exists($file)?'Existe':'NO EXISTE').'</pre>';
          if(file_exists($file)) {
            if(is_int($name)) {
              $name = basename($file);
            }
            $mailer->addAttachment($file, $name);
          }
        }
      }

      $mailer->Subject = (ENVIRONMENT == 'development'?'( DESARROLLO ) ':'').$config->Subject;
      $to = '';
      $cc = '';
      $cco ='';
      $allAddress = [];
      foreach($mailer->getToAddresses() as $add) {
        $allAddress[] = $add[0];
        if(count($add) == 2) {
          $to.= (!empty($to)?', ':'').$add[1].' <'.$add[0].'>';
        } else {
          $to.= (!empty($to)?', ':'').$add[0];
        }
      }
      foreach($mailer->getCcAddresses() as $add) {
        $allAddress[] = $add[0];
        if(count($add) == 2) {
          $cc.= (!empty($cc)?', ':'').$add[1].' <'.$add[0].'>';
        } else {
          $cc.= (!empty($cc)?', ':'').$add[0];
        }
      }
      foreach($mailer->getBccAddresses() as $add) {
        $allAddress[] = $add[0];
        if(count($add) == 2) {
          $cco.= (!empty($cco)?', ':'').$add[1].' <'.$add[0].'>';
        } else {
          $cco.= (!empty($cco)?', ':'').$add[0];
        }
      }
      $address = (!empty($to)?'Para: '.$to:'');
      $address.= (!empty($cc)?(!empty($address)?' - ':'').'CC: '.$cc:'');
      $address.= (!empty($cco)?(!empty($address)?' - ':'').'CCO: '.$cco:'');
      $address = htmlentities($address);

      if(!isset($config->data) || !is_array($config->data)) {
        $config->data = [];
      }
      $config->data['Subject']  = $mailer->Subject;
      $config->data['Subtitle'] = $mailer->Subtitle ?? '';
      $config->data['content']  = $config->content;
      $view = \Config\Services::renderer();
      $body = view($config->template ?? 'notification', $config->data);
      $mailer->msgHTML($body);
      $send = $mailer->send();
      if($send) {
        $messIdJson = $logPath.'lastSendMessageIds.json';
        $messageId = [];
        if(file_exists($messIdJson)) {
          $messageId = json_decode(file_get_contents($messIdJson), true);
          foreach ($allAddress as $dest) {
            if(isset($messageId[$dest])) {
              $mailer->addCustomHeader('In-Reply-To', end($messageId[$dest]));
              $mailer->addCustomHeader('references', implode(' ', $messageId[$dest]).' '.$mailer->MessageID);
            }
          } 
        }
        $fp = new \SplFileObject($messIdJson, 'w');
        foreach ($allAddress as $dest) {
          if(!isset($messageId[$dest])) {
            $messageId[$dest] = [];
          }
          $messageId[$dest][] = $mailer->MessageID;
        }
        $fp->fwrite(json_encode($messageId, JSON_PRETTY_PRINT));
      }
      $ErrorInfo = $mailer->ErrorInfo;
    } catch (Exception $e) {
      $ErrorInfo = $e->getMessage();
      $send = false;
    }
    return $send;
  } 

  public static function slugify($text) {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }

  public function validSession() {
    if(!$this->session) {
      $this->session = \Config\Services::session();
      $this->encryption = new \Config\Encryption();
      $this->session->start();
    }
    if($this->session && $this->session->has('token') && !empty($this->session->get('token'))) {
      return true;
    }
    return false;
  }

  public function getToken() {
    if($this->validSession()) {
      return $this->session->get('token');
    }
    return false;
  }

  protected function solveToken() {
    if($this->validSession()) {
      $decoded = JWT::decode($this->session->get('token'), $this->encryption->key, array('HS256'));
      return (object) $decoded;
    }
    return false;
  }

  protected function createToken($user) {
    if(!$this->validSession()) {
      $user->password = null;
      $user->login = date('Y-m-d H:i:s');
      $jwt = JWT::encode($user, $this->encryption->key);
      $this->session->set('token', $jwt);
      return $jwt;
    }
    return false;
  }

  public static function replaceViewValues() {
    return (object) [
      'find2Replace' => [
        '__COMERCIAL_NAME__', 
        '__CONTACT_EMAIL__', 
        '__CONTACT_PHONE__', 
        '__CONTACT_FB__', 
        '__CONTACT_TW__',
        '__CONTACT_IM__', 
        '__COMPANY_ADDRESS__', 
        '__COMPANY_LOCALITY__',
        '__LOGO_URL__',
        '__CONTACT_FB_SUPPORT__',
        '__CONTACT_TW_SUPPORT__',
        '__CONTACT_IM_SUPPORT__',
        '__SUPPORT_ADDRESS__',
        '__SUPPORT_LOCALITY__',
        '__SUPPORT_NAME__',
        '__SUPPORT_URL__',
        '__CONTACT_PHONE_SUPPORT__',
        '__CONTACT_EMAIL_SUPPORT__',
        '__DEV_AUTHOR__',
        '__DEV_COMPANY__',
        '__DEV_EMAIL__',
        '__DEV_URL__',
        '__DEV_PHONE__',
        '__DEV_TW_PROFILE__',
        '__DEV_TW_AUTHOR__',
        '__DEV_TW_PAGE__',
        '__DEV_IM_PROFILE__',
        '__DEV_IM_AUTHOR__',
        '__DEV_IM_PAGE__',
        '__BASE_URL__',
        '__PRIVACY_DATE__',
      ],
      'replace2Found' => [
        COMERCIALNAME, 
        CONTACT_EMAIL, 
        CONTACT_PHONE, 
        CONTACT_FB, 
        CONTACT_TW, 
        CONTACT_IM, 
        COMPANY_ADDRESS, 
        COMPANY_LOCALITY,
        LOGO_URL,
        CONTACT_FB_SUPPORT,
        CONTACT_TW_SUPPORT,
        CONTACT_IM_SUPPORT,
        SUPPORT_ADDRESS,
        SUPPORT_LOCALITY,
        SUPPORT_NAME,
        SUPPORT_URL,
        CONTACT_PHONE_SUPPORT,
        CONTACT_EMAIL_SUPPORT,
        DEV_AUTHOR,
        DEV_COMPANY,
        DEV_EMAIL,
        DEV_URL,
        DEV_PHONE,
        DEV_TW_PROFILE,
        DEV_TW_AUTHOR,
        DEV_TW_PAGE,
        DEV_IM_PROFILE,
        DEV_IM_AUTHOR,
        DEV_IM_PAGE,
        base_url(),
        date('01/02/Y', strtotime(FOUND_DATE)),
      ]
    ];
  }

  public function getAgencyType() {
    $agencyTypesModel = new AgencyType();
    $agencyTypes = $agencyTypesModel->asObject()
      ->where('status', 'ACTIVE')
      ->where('lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ; 
    return $agencyTypes;
  }

  public function getObjetivesWeb() {    
    $objetivosModel = new Objetivos();
    $objetivos = $objetivosModel->asObject()
      ->where('status', 'ACTIVE')
      ->where('lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    $objetivosDetallesModel = new ObjetivosDetalles();
    foreach ($objetivos as &$objetivo) {
      $objetivo->details = $objetivosDetallesModel->asObject()
        ->where('status', 'ACTIVE')
        ->where('objetivo_id', $objetivo->id)
        ->findAll()
      ; 
    }
    return $objetivos;
  }

  public function getTeamWeb() {    
    $equipos = [];
    /**
     * [$equipoModel description]
     * @var Equipo
     */
    /*$equipoModel = new Equipo();
    $equipos = $equipoModel->asObject()
      ->where('status', 'ACTIVE')
      ->where('equipo_lang', $this->locale)
      ->orderBy('orden', 'ASC')
      ->orderBy('id', 'ASC')
      ->findAll()
    ; 
    foreach ($equipos as &$equipo) {
      $equipo->equipo_image = base_url('files/'.strrev(str_replace('=', '', base64_encode($equipo->equipo_image))));
    }
    */
   return $equipos;
  }

  public function getNewsWeb() {    
    $newsModel = new News();
    $news = $newsModel->asObject()
      ->where('status', 'ACTIVE')
      ->where("(lang = '{$this->locale}' OR lang IS NULL)")
      //->where("updated_at >= '" . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . ' - 60 days')) . "'")
      ->orderBy('updated_at', 'DESC')
      ->orderBy('orden', 'ASC')
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    foreach ($news as &$new) {
      $new->photo = base_url('files/'.strrev(str_replace('=', '', base64_encode($new->photo))));
      $new->details = strlen($new->details) > 150 ? substr($new->details, 0, 147) . '...' : trim($new->details);
    } 
    return $news;
  }

  public function getAgentsWeb() {        
    $agentsModel = new Agents();
    $agents = $agentsModel->asObject()
      ->where('status', 'ACTIVE')
      ->orderBy('orden', 'ASC')
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    $agentsContactsModel = new AgentsContacts();
    foreach ($agents as &$agent) {
      $agent->fullname = $agent->prefix. ' ' . $agent->firstname . ' ' . $agent->lastname;
      $agent->photo = base_url('files/'.strrev(str_replace('=', '', base64_encode($agent->photo))).'/'.strrev(str_replace('=', '', base64_encode(str_replace(['.', ' '], '_', $agent->fullname)))));
      $agent->contacts = $agentsContactsModel->asObject()
        ->where('status', 'ACTIVE')
        ->where('agent_id', $agent->id)
        ->orderBy('orden', 'ASC')
        ->orderBy('id', 'ASC')
        ->findAll()
      ; 
    }
    return $agents;
  }



  public static function getMimeTypeFileName($filePath='') {
    $mime = null;
    if (($lastDotPosition = strrpos($filePath, '.')) !== false) {
      $mime = Mimes::guessTypeFromExtension(substr($filePath, $lastDotPosition + 1));
    }
    if (empty($mime)) {
      $mime = mime_content_type($filePath);
    }
    if (empty($mime)) {
      $mime = 'application/octet-stream';
    }
    return $mime;
  }

  public static function hashBucketFilemname($arg1, $arg2=null, $arg3=null, $arg4=null) {
    $filePath = '';
    $cleanChars = ['.'];
    if($arg1 && !empty($arg1)) {
      foreach ($cleanChars as $char) {
        $arg1 = ltrim($arg1, $char);
      }
      $filePath.= (!empty($filePath) ? '/' : '').$arg1;
    }
    if($arg2 && !empty($arg2)) {
      foreach ($cleanChars as $char) {
        $arg2 = ltrim($arg2, $char);
      }
      $filePath.= (!empty($filePath) ? '/' : '').$arg2;
    }
    if($arg3 && !empty($arg3)) {
      foreach ($cleanChars as $char) {
        $arg3 = ltrim($arg3, $char);
      }
      $filePath.= (!empty($filePath) ? '/' : '').$arg3;
    }
    if($arg4 && !empty($arg4)) {
      foreach ($cleanChars as $char) {
        $arg4 = ltrim($arg4, $char);
      }
      $filePath.= (!empty($filePath) ? '/' : '').$arg4;
    }
    return strrev(str_replace('=', '', base64_encode($filePath)));
  }



  public function getCategoriesWithOffers() {    
    $categoriaOfertasModel = new CategoriaOfertas();
    $categories = $categoriaOfertasModel->asObject()
      ->where('status', 'ACTIVE')
      ->where('categoria_lang', $this->locale)
      ->orderBy('id', 'ASC')
      ->findAll()
    ;
    if(count($categories) > 0) {
      foreach ($categories as &$category) {
        $category->categoria_image  = base_url('files/'.strrev(str_replace('=', '', base64_encode($category->categoria_image))).'/'.strrev(str_replace('=', '', base64_encode($category->categoria))));
        $category->ofertas =  self::searchOffers($category->categoria_slug);
        $category->cntOfertas = count($category->ofertas);
      }
    }
    return $categories;
  }

  public function searchOffers($categoria=null, $oferta=null, $limit=null, $offset=0) {
    $db      = \Config\Database::connect();
    $offersQuery = $db
      ->table('ofertas AS ot')
      ->select('ot.id, oc.id AS id_categoria, oc.categoria_slug, ot.slug, ot.titulo, ot.subtitulo, ot.favorita, ot.resumen, ot.file, ot.file_type, ot.image, ot.orden, oc.categoria, oc.categoria_descripcion, ot.lang, oc.categoria_lang, ot.status, oc.status AS status_categoria, oc.created_at AS categoria_created_at, oc.updated_at AS categoria_updated_at, ot.created_at, ot.updated_at')
      ->join('categoria_ofertas AS oc', 'oc.id = ot.categoria_id AND ot.lang = oc.categoria_lang', 'INNER')
      ->where('ot.status', 'ACTIVE')
      ->where('oc.status', 'ACTIVE')
      ->where('ot.lang', $this->locale)
      ->where('oc.categoria_lang', $this->locale);
    if(!empty($categoria)) {
      $offersQuery = $offersQuery->where('oc.categoria_slug', $categoria);
    }
    if(!empty($oferta)) {
      $offersQuery = $offersQuery->where('ot.slug', $oferta);
    }
    if(!empty($limit) && is_int($limit) && $limit > 0) {
      $offersQuery = $offersQuery->limit($limit);
    }
    if(!empty($offset) && is_int($offset) && $offset > 0) {
      $offersQuery = $offersQuery->offset($offset);
    }
    $offers = $offersQuery->orderBy('ot.orden', 'ASC')
      ->orderBy('ot.titulo', 'ASC')
      ->orderBy('ot.id', 'ASC')
      //->getCompiledSelect()
      ->get()
      ->getResult()
    ;
    foreach ($offers as &$offer) {
      $offer->image = base_url('bucketC/' . $offer->image);
      $offer->fileMimeType = self::getMimeTypeFileName($offer->image);
      if($offer->file_type == 'local') {
        $ext = explode('.', $offer->file);
        $filePath = $this->basePath.$offer->file;
        $ext = end($ext);
        $offer->filename  = trim($offer->titulo).'.'.$ext;
        $offer->fileextension  = $ext;
        $offer->file  = base_url('bucketC/' . $offer->file );
      }
    }
    return $offers;
  }

  public static function getParameterApp(String $locale) {
    $paramsModel = new Parameters();
    $parameters = $paramsModel->asObject()
        ->where("status = 'ACTIVE' AND (parameter_lang = '{$locale}' OR parameter_lang IS NULL)")
        ->orderBy('parameter', 'ASC')
        //->getCompiledSelect()
        ->findAll()
    ;
    foreach ($parameters as $parameter) {
      if(in_array(strtoupper($parameter->parameter), ['ADDSCRIPTS', 'ADDSCRIPTS_ADMIN'])) continue;
      defined(strtoupper($parameter->parameter)) || define(strtoupper($parameter->parameter), $parameter->parameter_value);
    }
    return $parameters;
  }
}
