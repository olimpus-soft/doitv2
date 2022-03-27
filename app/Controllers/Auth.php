<?php 
namespace App\Controllers;
use App\Models\Users;
use App\Models\Sections;
use CodeIgniter\HTTP\Request;
use CodeIgniter\API\ResponseTrait;
use \Firebase\JWT\JWT;

class Auth extends BaseController {
	public $__company;
 	
 	public function __construct(){
 			$sectM = new Sections();
			$this->__company = $sectM->getAll(['id' => 7]);
			$this->__company = $this->__company->footer;			
			$data = $sectM->getAll(['id' => 1]);
			$this->__company->about = $data->about->about;
			$this->__company->aboutUs = $data->about->about;
			session()->set('company', $this->__company);
 	}

	public function index() {
		return view('admin/login', [
			'username' => '',
			'validation' => \Config\Services::validation(),
		]);
	}

	public function resetPass($data) {
		$email = mydecrypt(showData($data));
		$sectM = new Users();
		$user = $sectM->findOne([ 'email' => trim($email), 'status' => 3]);
		if($user) {
			return view('admin/reset', [
				'data' => $data,
				'validation' => \Config\Services::validation(),
			]);
		}
		return view('admin/error', [
			'error' => 'Error',
			'errorDes' => 'Usuario No encontrado',
			'message' => 'El usuario no existe o no se ha marcado para restableces contraseña',
			'validation' => \Config\Services::validation(),
		]);
	}

	public function signup() {
		return view('admin/signup', [
			'name' => '',
			'username' => '',
			'validation' => \Config\Services::validation(),
		]);
	}

	public function singIn() {
		$vars = $this->request->getVar();
		echo '<pre>';
		$_POST2 = file_get_contents("php://input");
		die(print_r(array($_POST,$_POST2, $_GET, $vars, $_REQUEST)));

		$formRules = [
			'username' => [
				'label' => 'Correo Electrónico',
				'rules' => 'required|trim|min_length[10]|max_length[200]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'El {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'El {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'password' => [
				'label' => 'Contraseña',
				'rules' => 'required|trim|min_length[8]|max_length[32]|exists_user[username]|status_user[username]|valid_password[password]|valid_login[username,password]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
					'exists_user' => 'El usuario no existe, verifique',
					'status_user' => 'El usuario no esta activo, verifique',
					'valid_password' => 'La Contraseña no cumple las condiciones, verifique. Mínimo 8 caracteres. Al menos una mayúscula. Al menos una minúscula. Al menos un numero.',
					'valid_login' => 'Usuario o contraseña incorrectors ',
				]
			],
		];
    $sectM = new Users();
		$validated = $this->validate($formRules);
		$user = $sectM->findOne(['email' => $vars['username']]);
		if(!$user) {
			$this->validator->setError('username', 'No se encontro el usuario, verifique');
			$validated = false;
		}
		
		if($validated) {
			$this->createToken($user);
      return redirect()->to(site_url('Admin/General'))->with('success', 'Bienvenido(a) <b>'.$user->name.'</b>');
		}
		return view('admin/login', [
			'username' => $vars['username'],
			'validation' => $this->validator,
		]);
	}

	public function forbidenPass() {
		$vars = $this->request->getVar();
		$formRules = [
			'username' => [
				'label' => 'Correo Electrónico',
				'rules' => 'required|trim|min_length[10]|max_length[200]|exists_user[username]|status_user_forgot[username]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'El {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'El {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
					'exists_user' => 'El usuario no existe, verifique',
					'status_user_forgot' => 'El usuario no esta activo, verifique',
				]
			]
		];
		$validated = $this->validate($formRules);
		$msg = 'No se pudo procesar la solocitud.';
		if($validated) {
	    $sectM = new Users();
	    $email = \Config\Services::email();
			$user = $sectM->findOne(['email' => $vars['username']]);
			$user->status = 3;
			$user->password = password_hash(password_hash(uniqid(), PASSWORD_BCRYPT), PASSWORD_BCRYPT);
			$email->setTo($user->email);
			$email->setBCC('mmorales@olimpussoft.com');
			$email->setFrom('admin@olimpussoft.com', 'Olimpuss Soft');
	    $subject = 'Olvido de Contraseña';
	    $email->setSubject($subject);
	    $dataMsg = (array) $this->__company;
	    $dataMsg['subject'] = $subject;
	    $dataMsg['message'] = '<ul><li><b>Nombre: </b>'.$user->name.'</li><li><b>Correo: </b>'.$user->email.'</li></ul><br>Usuario marcado como olvido de contraseña.<br><p><a href="'.base_url('Auth/Reset-Password/'.hideData(myencrypt($user->email))).'" class="btn btn-primary" style="padding: 10px 15px;display: inline-block;border-radius: 5px;background: #30e3ca;color: #ffffff;">Restablecer</a></p>';
	    $logo_file = realpath(__DIR__.'/../..').'/public/assets/images/'.basename($this->__company->image_url);
	    $email->attach($logo_file, 'inline');
	    $cid = $email->setAttachmentCID($logo_file);
	    $dataMsg['cid_logo'] = $cid;

	    $message = view('mail/message', $dataMsg);
	    $email->setMessage($message);
	    if ($email->send())  {
	      $r = $sectM->update($user->id, ['status' => $user->status, 'password' => $user->password ]);
	      $msg = 'Se ha procesado su solicitud, verifique su correo electrónico.';
	    } else {
	      $data = $email->printDebugger(['headers']);
	    }
		}
    return redirect()->to(site_url('Admin/Login'))->with('success', $msg);
	}

	public function setPassword() {
		$vars = $this->request->getVar();
		$formRules = [
			'password' => [
				'label' => 'Contraseña',
				'rules' => 'required|trim|min_length[8]|max_length[32]|valid_password[password]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
					'exists_user' => 'El usuario no existe, verifique',
					'status_user' => 'El usuario no esta activo, verifique',
					'valid_password' => 'La Contraseña no cumple las condiciones, verifique. Mínimo 8 caracteres. Al menos una mayúscula. Al menos una minúscula. Al menos un numero.',
					'valid_login' => 'Usuario o contraseña incorrectors ',
				]
			],
		];
		$validated = $this->validate($formRules);
		$msg = 'No se pudo procesar la solicitud.';
		$email = mydecrypt(showData($vars['data']));
		$sectM = new Users();
		$user = $sectM->findOne([ 'email' => trim($email), 'status' => 3]);
		if(!$user) {
			$validated = false;	
			$this->validator->setError('password', 'Usuario no encontrado, verifique');
		}
		if($validated) {
			$user->status = 1;
			$user->password = password_hash($vars['password'], PASSWORD_BCRYPT);
			$email = \Config\Services::email();
			$email->setTo($user->email);
	    $subject = 'Contraseña Restablecida';
	    $email->setSubject($subject);
	    $dataMsg = (array) $this->__company;
	    $dataMsg['subject'] = $subject;
	    $dataMsg['message'] = '<ul><li><b>Nombre: </b>'.$user->name.'</li><li><b>Correo: </b>'.$user->email.'</li></ul><br>Su contraseña ha sido restablecida.<br>';
	    $logo_file = realpath(__DIR__.'/../..').'/public/assets/images/'.basename($this->__company->image_url);
	    $email->attach($logo_file, 'inline');
	    $cid = $email->setAttachmentCID($logo_file);
	    $dataMsg['cid_logo'] = $cid;

	    $message = view('mail/message', $dataMsg);
	    $email->setMessage($message);
	    if ($email->send())  {
	      $r = $sectM->update($user->id, ['status' => $user->status, 'password' => $user->password ]);
	      $msg = 'Se ha procesado su solicitud, verifique su correo electrónico.';
	    } else {
	      $data = $email->printDebugger(['headers']);
	    }
		}
    return redirect()->to(site_url('Admin/Login'))->with('success', $msg);
	}

	public function userSignUp() {
		$vars = $this->request->getVar();
		$formRules = [
			'name' => [
				'label' => 'Nombre Completo',
				'rules' => 'required|min_length[10]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'El {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'El {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'username' => [
				'label' => 'Correo Electrónico',
				'rules' => 'required|trim|min_length[10]|max_length[200]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'El {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'El {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'password' => [
				'label' => 'Contraseña',
				'rules' => 'required|trim|min_length[8]|max_length[32]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
				]
			],
		];
    $sectM = new Users();
		$validated = $this->validate($formRules);
		$data = $sectM->getAll(['email' => $vars['username']]);
		if(count($data) > 0) {
			$this->validator->setError('username', 'Correo Electronico ya registrado, verifique');
			$validated = false;
		}
		if(!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $vars['password'])) {
			$this->validator->setError('password', 'La Contraseña no cumple las condiciones, min 8 caracteres, al menos una mayúscula, al menos una minúscula, al menos un numero, verifique');
			$validated = false;
		}
		
		if($validated) {
      $sectM->save([
      	'name' 			=> $vars['name'],
      	'email' 		=> $vars['username'],
      	'password' 	=> password_hash($vars['password'], PASSWORD_BCRYPT ),
      	'status' 		=> 2,
      ]);
      $email = \Config\Services::email();

        //$email->setTo('globalcreativodg@gmail.com');
        $email->setTo($email->fromEmail);
        $email->setBCC('mmorales@olimpussoft.com');
        $subject = 'Usuario Registrado';
        $email->setSubject($subject);
        $dataMsg = (array) $this->__company;
        $dataMsg['subject'] = $subject;
        $dataMsg['message'] = '<ul><li><b>Nombre: </b>'.$vars['name'].'</li><li><b>Correo: </b>'.$vars['username'].'</li></ul><br>Esta inactivo en espera de activacion';
        $logo_file = realpath(__DIR__.'/../..').'/public/assets/images/'.basename($this->__company->image_url);
        $email->attach($logo_file, 'inline');
        $cid = $email->setAttachmentCID($logo_file);
        $dataMsg['cid_logo'] = $cid;

        $message = view('mail/message', $dataMsg);
        $email->setMessage($message);
        if ($email->send())  {
          //echo 'Email successfully sent';
        } else {
          $data = $email->printDebugger(['headers']);
        }
      return redirect()->to(site_url('Auth/Login'))->with('success', 'Usuario registrado, queda a la espera que un administrador le active.');
		}
		return view('admin/signup', [
			'name' => $vars['name'],
			'username' => $vars['username'],
			'validation' => $this->validator,
		]);
	}

	public function myProfile() {
		$user = (array) $this->solveToken();
		return view('admin/profile', [
			'user' => $user,
			'validation' => \Config\Services::validation(),
		]);
	}
	
	public function updProfile() {
		$vars = $this->request->getVar();
		$formRules = [
			'user.name' => [
				'label' => 'Nombre',
				'rules' => 'required|min_length[10]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'user.phone' => [				
				'label' => 'Teléfono',
				'rules' => 'required|trim|min_length[6]|max_length[11]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
		];
		$validated = $this->validate($formRules);
    $sectM = new Users();
    $user = $this->solveToken();			
		if($validated) {
      $r = $sectM->update($user->id, [
      	'name' => $vars['user']['name'],
      	'phone' => $vars['user']['phone'],
      ]);
      $user->name = $vars['user']['name'];
      $user->phone = $vars['user']['phone'];
      $jwt = JWT::encode($user, $this->encryption->key);
      $this->session->set('token', $jwt);
      
      return redirect()->to(site_url('Admin/Profile'))->with('success', 'Se ha guardado correctamente');
		}
		$user = (array) $user;
		$user['validation'] = \Config\Services::validation();
		return view('admin/profile', $user);
	}

	public function signOut() {
		session()->set('token', null);
		session()->remove('token');
		session()->stop();
		session()->regenerate(true);
		session()->destroy();
		session()->start();
		return redirect()->to('/Auth/Login')->with('success', 'Se ha cerrado la sesión correctamente ');
	}
	
}
