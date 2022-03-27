<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\Parameters;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
      $this->locale = $this->request->getLocale();
      $this->basePath = realpath(__DIR__.'/../..').DIRECTORY_SEPARATOR.'bucket'.DIRECTORY_SEPARATOR;
      $paramsModel = new Parameters();
      $parameters = $paramsModel->asObject('App\Models\Parameters')
          ->where("status = 1 AND (parameter_lang = '{$this->locale}' OR parameter_lang IS NULL)")
          ->orderBy('parameter', 'ASC')
          ->findAll()
      ;
      foreach ($parameters as $parameter) {
        if(in_array(strtoupper($parameter->parameter), ['ADDSCRIPTS', 'ADDSCRIPTS_ADMIN'])) continue;
        defined(strtoupper($parameter->parameter)) || define(strtoupper($parameter->parameter), $parameter->parameter_value);
        //echo '<pre>';
        //echo print_r([strtoupper($parameter->parameter) => $parameter->parameter_value, 'parameter_lang' => $parameter->parameter_lang ], true);
        //echo '</pre>';
      }
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

  public function slugify($text) {
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
}
