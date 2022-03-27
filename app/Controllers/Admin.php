<?php 
namespace App\Controllers;
use App\Models\Sliders;
use App\Models\Sections;
use App\Models\Portfolio;
use App\Models\Contacto;

//include APPPATH.'Models/Sliders.php';
class Admin extends BaseController {
	public $__company;
 	public function __construct(){
 		//if($this->validSession()) {
 			$sectM = new Sections();
			$this->__company = $sectM->getAll(['id' => 7]);
			$this->__company = $this->__company->footer;
			$data = $sectM->getAll(['id' => 1]);
			$this->__company->about = $data->about->about;
			$this->__company->aboutUs = $data->about->about;
			session()->set('company', $this->__company);
		//}
 	}

	public function index() {
		if(!$this->validSession() || !$this->solveToken()) {
			return redirect()->to(base_url('Admin/Login'));
		}
		return redirect()->to(base_url('Admin/General'));
	}

	public function sliders() {
		$slidM = new Sliders();
		$data = ['sliders' => $slidM->getAll()];
		return view('admin/sliders', $data);
	}

	public function add_sliders($id=null) {
		if(!$id) {
			$data = [
				'isNew' => true,
				'order' => 0,
				'title' => '',
				'description' => '',
				'image_url' => false,
				'enlace' => '',
			];
		} else {
			$slidM = new Sliders();
			$id = mydecrypt(showData($id));
			$data = $slidM->getAll(['id' => $id]);
			$data = count($data)>0?(array)$data[0]:null;
			if(!$data) {
				return redirect()->to( base_url('Admin/sliders') )->with('error', 'No se encontro el slider especificado');
			}
			$data['isNew'] = false;
		}
		return view('admin/formsliders', $data);
	}

	public function create_slider() {
		$validated = $this->validate([
      'uploadThumb' => [
        'label' => 'La Imágen',
      	'rules' => 'uploaded[uploadThumb]|mime_in[uploadThumb,image/jpg,image/jpeg,image/png]|is_image[uploadThumb]|max_size[uploadThumb,4096]|max_dims[uploadThumb,1600,550]',
      ],
    ]);

    $msg = 'Por favor, seleccione un archivo valido (png, jpg). Max: 4Mb';
    if ($validated) {
      $image_url = $this->request->getFile('uploadThumb');
      $fName = $image_url->getRandomName();
      $filePath = realpath(__DIR__.'/../..') . '/public/assets/images/slider/'.$fName;
	      if(file_exists($filePath)) {
      		chmod($filePath, 0777);
	      	unlink($filePath);
	      }
      $rimg = $image_url->move(realpath(__DIR__.'/../..') . '/public/assets/images/slider', $fName);
			$data = array_merge([
				'order' => 0,
				'title' => '0',
				'description' => '0',
				'image_url' => '',
				'enlace' => '',
			], $_POST);
			$data['image_url'] = base_url('assets/images/slider/'.$fName);
			if($rimg) {
    		chmod($filePath, 0777);
				$slidM = new Sliders();
				$data = $slidM->save(['slider_data' => hideData(myencrypt(json_encode($data)))]);
				$msg = 'Slider Guardado correctamente';
				$this->session->setFlashdata('success', $msg);
				return redirect()->to( base_url('Admin/sliders') )->with('success', $msg);
			} else {
				$msg = 'No se pudo guardar el archivo, intente nuevamente';
				return redirect()->to( base_url('Admin/sliders') )->with('error', $msg);
			}
			
			$msg.= $this->validator->listErrors();
			return redirect()->to( base_url('Admin/sliders') )->with('error', $msg);
		}
	}

	public function update_slider() {
		$image_url = $_POST['image_url'];
		if(empty($image_url)) {
			$validated = $this->validate([
	      'uploadThumb' => [
	      	'label' => 'La Imágen',
	      	'rules' => 'uploaded[uploadThumb]|mime_in[uploadThumb,image/jpg,image/jpeg,image/png]|is_image[uploadThumb]|max_size[uploadThumb,4096]|max_dims[uploadThumb,1600,550]',
	      ],
	    ]);			
		} else {
			$validated = true;
		}
    $msg = 'Por favor, seleccione un archivo valido (png, jpg). Max: 4Mb';
    if ($validated) {
      $image_file = $this->request->getFile('uploadThumb');
    	if($image_file ) {
	      $fName = $image_file->getRandomName();
	      $filePath = realpath(__DIR__.'/../..') . '/public/assets/images/slider/'.$fName;
	      if(file_exists($filePath)) {
	      	unlink($filePath);
	      }
	      chmod($filePath, 0777);
	      $rimg = $image_file->move(realpath(__DIR__.'/../..') . '/public/assets/images/slider', $fName);
	      $image_url = base_url('assets/images/slider/'.$fName);
	    }
			$data = array_merge([
				'order' => 0,
				'title' => '0',
				'description' => '0',
				'image_url' => $image_url,
				'enlace' => '',
			], $_POST);
			$id = mydecrypt(showData($data['data']));
			unset($data['data']);
			$data['image_url'] = $image_url;
			$slidM = new Sliders();
			$rupd = $slidM->update($id, ['slider_data' => hideData(myencrypt(json_encode($data)))]);
			if($rupd) {
				$msg = 'Slider Actualizado correctamente';
				$this->session->setFlashdata('success', $msg);
				return redirect()->to( base_url('Admin/sliders') )->with('success', $msg);
			} else {
				$msg = 'No se pudo actualizar, intente nuevamente';
				return redirect()->to( base_url('Admin/sliders') )->with('error', $msg);
			}
		}
		$msg.= $this->validator->listErrors();
		return redirect()->to( base_url('Admin/sliders') )->with('error', $msg);
	}

	public function del_sliders($id=null) {
		$slidM = new Sliders();
		$id = mydecrypt(showData($id));
		$data = $slidM->getAll(['id' => $id]);
		
		$data = count($data)>0?(array)$data[0]:null;
		if(!$data) {
			return $this->respond(['success' => false, 'message' => 'No se encontro el registro '.$id], 404, 'No se encontro el registro '.$id);
		}

		$del = $slidM->delete($id);
		if($del) {
			if(!empty($data['image_url'])) {
				$fName = basename($data['image_url']);
				$filePath = realpath(__DIR__.'/../..') . '/public/assets/images/slider/'.$fName;
	      if(file_exists($filePath)) {
	      	@chmod($filePath, 0777);
	      	@unlink($filePath);
	      }
			}
			return $this->respond(['success' => true, 'message' => 'Registro eliminado'], 200);
		}
		return $this->respond($data, 403, 'No se pudo eliminar el registro '.$id);
	}

	public function aboutUs() {
		$sectM = new Sections();
		$data = $sectM->getAll(['id' => 1]);
		$validation =  \Config\Services::validation();
		$data->about->data = hideData(myencrypt($data->about->id));
		$data->about->id = hideData(myencrypt($data->about->id));
		return view('admin/aboutus', [
			'about' => (array)$data->about,
			'validation' => $validation,
		]);
	}

	public function aboutUpdate() {
		$vars = $this->request->getVar();
		$formRules = [
			'about.data' => [
				'label' => 'Seccion ID',
				'rules' => 'required|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El ID de la Sección es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'about.title' => [				
				'label' => 'Titulo Principal',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'about.subtitle' => [		
				'label' => 'Subtitulo Principal',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'about.title2' => [		
				'label' => 'Titulo Secundario',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'about.about' => [		
				'label' => 'Reseña',
				'rules' => 'required|trim|min_length[50]|max_length[1000]',
				'errors' => [
					'required' => 'La {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
		];
		$image_url = $this->request->getVar('image_url');
		if(empty($image_url)) {
			$formRules['uploadThumb'] = [
      	'label' => 'La Imágen',
      	'rules' => 'uploaded[uploadThumb]|mime_in[uploadThumb,image/jpg,image/jpeg,image/png]|is_image[uploadThumb]|max_size[uploadThumb,4096]|max_dims[uploadThumb,460,310]',
      ];
		}
		$validated = $this->validate($formRules);
		if($validated) {
			if(empty($image_url)) {
				$image_url = $this->request->getFile('uploadThumb');
	      $fName = 'aboutus.'.($image_url->getExtension() ?? $image_url->guessExtension());
	      $filePath = realpath(__DIR__.'/../..') . '/public/assets/images/'.$fName;
	      if(file_exists($filePath)) {
	      	chmod($filePath, 0777);
	      	unlink($filePath);
	      }
	      $rimg = $image_url->move(realpath(__DIR__.'/../..') . '/public/assets/images/', $fName);
	      if(!$rimg) {
	      	return redirect()->to(site_url('Admin/About-Us'))->with('error', 'No se pudo guardar la imagen.');
	      }
	      chmod($filePath, 0777);
      	$vars['about']['image_url'] = base_url('assets/images/'.$fName);
      } else {
      	$rimg = true;
      	$vars['about']['image_url'] = $image_url;
      }
      $id = mydecrypt(showData($vars['about']['data']));
      unset($vars['about']['data']);
      $vars['about']['enlace'] = site_url('#about');
      $vars['about']['time1'] = time();
      $vars['about']['time2'] = date('Y-m-d H:i:s');
      $sectM = new Sections();
      $sectM->update($id, ['section_data' => hideData(myencrypt(json_encode(['about' => $vars['about']])))]);
      return redirect()->to(site_url('Admin/About-Us'));
		}
		return view('admin/aboutus', [
			'about' => $vars['about'],
			'validation' => $this->validator,
		]);
	}

	public function featuresUs() {
		$sectM = new Sections();
		$data = $sectM->getAll(['id' => 3]);
		$validation =  \Config\Services::validation();
		$data->features->data = hideData(myencrypt($data->features->id));
		$data->features->id = hideData(myencrypt($data->features->id));
		$data->features = json_decode(json_encode($data->features), true);
		return view('admin/features', [
			'features' => (array)$data->features,
			'validation' => $validation,
		]);
	}

	public function featuresUpdate() {
		$vars = $this->request->getVar();
		$formRules = [
			'features.data' => [
				'label' => 'Seccion ID',
				'rules' => 'required|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El ID de la Sección es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.title' => [				
				'label' => 'Titulo Principal',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.subtitle' => [		
				'label' => 'Subtitulo Principal',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.features.0.title' => [				
				'label' => 'Caracteristica 1',
				'rules' => 'required|trim|min_length[1]|max_length[50]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.features.0.description' => [				
				'label' => 'Descripcion 1',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.features.1.title' => [				
				'label' => 'Caracteristica 2',
				'rules' => 'required|trim|min_length[1]|max_length[50]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.features.1.description' => [				
				'label' => 'Descripcion 2',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.features.2.title' => [				
				'label' => 'Caracteristica 3',
				'rules' => 'required|trim|min_length[1]|max_length[50]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.features.2.description' => [				
				'label' => 'Descripcion 3',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.features.3.title' => [				
				'label' => 'Caracteristica 4',
				'rules' => 'required|trim|min_length[1]|max_length[50]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'features.features.3.description' => [				
				'label' => 'Descripcion 4',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
		];
		$image_url = $this->request->getVar('image_url');
		if(empty($image_url)) {
			$formRules['uploadThumb'] = [
				'label' => 'La Imágen',
      	'rules' => 'uploaded[uploadThumb]|mime_in[uploadThumb,image/jpg,image/jpeg,image/png]|is_image[uploadThumb]|max_size[uploadThumb,4096]|max_dims[uploadThumb,850,700]',
      ];
		}
		$validated = $this->validate($formRules);
		if($validated) {
			if(empty($image_url)) {
				$image_url = $this->request->getFile('uploadThumb');
	      $fName = 'features.'.($image_url->getExtension() ?? $image_url->guessExtension());
	      $filePath = realpath(__DIR__.'/../..') . '/public/assets/images/'.$fName;
	      if(file_exists($filePath)) {
	      	chmod($filePath, 0777);
	      	unlink($filePath);
	      }
	      $rimg = $image_url->move(realpath(__DIR__.'/../..') . '/public/assets/images/', $fName);
	      if(!$rimg) {
	      	return redirect()->to(site_url('Admin/Features-Us'))->with('error', 'No se pudo guardar la imagen.');
	      }
	      chmod($filePath, 0777);
      	$vars['features']['image_url'] = base_url('assets/images/'.$fName);
	    } else {
	    	$rimg = true;
      	$vars['features']['image_url'] = $image_url;
	    }
      $id = mydecrypt(showData($vars['features']['data']));
      unset($vars['features']['data']);
      $vars['features']['enlace'] = '';//site_url('#features');
      $vars['features']['time1'] = time();
      $vars['features']['time2'] = date('Y-m-d H:i:s');
      $sectM = new Sections();
      $r = $sectM->update($id, ['section_data' => hideData(myencrypt(json_encode(['features' => $vars['features']])))]);
      return redirect()->to(site_url('Admin/Features-Us'))->with('success', 'Se ha guardado correctamente');;
		}
		return view('admin/features', [
			'features' => $vars['features'],
			'validation' => $this->validator,
		]);
	}

	public function oursServices() {
		$sectM = new Sections();
		$data = $sectM->getAll(['id' => 4]);
		$validation =  \Config\Services::validation();
		$data->services->data = hideData(myencrypt($data->services->id));
		$data->services->id = hideData(myencrypt($data->services->id));
		$data->services = json_decode(json_encode($data->services), true);
		return view('admin/services', [
			'services' => (array)$data->services,
			'validation' => $validation,
		]);
	}

	public function servicesUpdate() {
		$vars = $this->request->getVar();
		$formRules = [
			'services.data' => [
				'label' => 'Seccion ID',
				'rules' => 'required|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El ID de la Sección es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'services.title' => [				
				'label' => 'Titulo Principal',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'services.subtitle' => [		
				'label' => 'Subtitulo Principal',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
		];
		for ($i=0; $i < 8; $i++) { 
			$formRules['services.services.'.$i.'.icon'] = [				
				'label' => 'Icono '.($i+1),
				'rules' => 'required|trim|min_length[1]|max_length[80]',
				'errors' => [
					'required' => 'El {field} es necesari',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			];
			$formRules['services.services.'.$i.'.title'] = [				
				'label' => 'Servicio '.($i+1),
				'rules' => 'required|trim|min_length[1]|max_length[50]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			];
			$formRules['services.services.'.$i.'.description'] = [				
				'label' => 'Descripcion '.($i+1),
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
				]
			];
		}
		$validated = $this->validate($formRules);
		//dd($vars, $formRules, $validated);
		if($validated) {
      $id = mydecrypt(showData($vars['services']['data']));
      unset($vars['services']['data']);
      $vars['services']['enlace'] = '';//site_url('#services');
      $vars['services']['time1'] = time();
      $vars['services']['time2'] = date('Y-m-d H:i:s');
      for ($i=0; $i < 8; $i++) { 
				$vars['services']['services'][$i]['status'] = 1;
			}
      $sectM = new Sections();
      $r = $sectM->update($id, ['section_data' => hideData(myencrypt(json_encode(['services' => $vars['services']])))]);
      return redirect()->to(site_url('Admin/Ours-Services'))->with('success', 'Se ha guardado correctamente');;
		}
		return view('admin/services', [
			'services' => $vars['services'],
			'validation' => $this->validator,
		]);
	}

	public function oursPortfolio() {
		$sectM = new Sections();
		$data = $sectM->getAll(['id' => 5]);
		$validation =  \Config\Services::validation();
		//$data->portfolio = $data->porfolio;
		$data->portfolio->data = hideData(myencrypt($data->portfolio->id));
		$data->portfolio->id = hideData(myencrypt($data->portfolio->id));
		$data->portfolio = json_decode(json_encode($data->portfolio), true);
		return view('admin/portfolio', [
			'portfolio' => (array)$data->portfolio,
			'permitCategories' => array_keys($data->portfolio['categories']),
			'validation' => $validation,
			'slug' => $this->slugify('preuba de slug-ñsñ'),
		]);
	}

	public function portfolioUpdate() {
		$vars = $this->request->getVar();
		$formRules = [
			'portfolio.data' => [
				'label' => 'Seccion ID',
				'rules' => 'required|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El ID de la Sección es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'portfolio.title' => [				
				'label' => 'Titulo Principal',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'portfolio.subtitle' => [		
				'label' => 'Subtitulo Principal',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
		];
		$validated = $this->validate($formRules);
    $sectM = new Sections();
    $id = mydecrypt(showData($vars['portfolio']['data']));
  	$data = $sectM->getAll(['id' => $id]);
    //$data->portfolio = $data->porfolio;
		$data->portfolio->data = hideData(myencrypt($data->portfolio->id));
		$data->portfolio = json_decode(json_encode($data->portfolio), true);			
		if($validated) {
      unset($vars['portfolio']['data']);
      $vars['portfolio']['categories'] = $data->portfolio['categories'] ?? [];
      $vars['portfolio']['enlace'] = '';//site_url('#portfolio');
      $vars['portfolio']['time1'] = time();
      $vars['portfolio']['time2'] = date('Y-m-d H:i:s');
      $sectM = new Sections();
      $r = $sectM->update($id, ['section_data' => hideData(myencrypt(json_encode(['portfolio' => $vars['portfolio']])))]);
      return redirect()->to(site_url('Admin/Portfolio'))->with('success', 'Se ha guardado correctamente');
		}
		return view('admin/portfolio', [
			'portfolio' => $vars['portfolio'],
			'permitCategories' => array_keys($data->portfolio['categories']),
			'validation' => $this->validator,
		]);
	}
	
	public function portfolioToggle($data) {
		$sectM = new Sections();
		$vars = explode('-', mydecrypt(showData($data)));
		$vars[0] = mydecrypt(showData($vars[0]));
		$vars[1] = mydecrypt(showData($vars[1]));
		$data = $sectM->getAll(['id' => $vars[0]]);
		$data->portfolio->data = hideData(myencrypt($data->portfolio->id));
		$data->portfolio->id = hideData(myencrypt($data->portfolio->id));
		$data->portfolio = json_decode(json_encode($data->portfolio), true);
		if(!isset($data->portfolio['categories'][$vars[1]])) {
			return redirect()->to(site_url('Admin/Portfolio'))->with('error', 'No se encontro la categoria');
		}
		$data->portfolio['categories'][$vars[1]]['status'] = $data->portfolio['categories'][$vars[1]]['status'] == 1 ? 0 : 1;
		$r = $sectM->update($vars[0], ['section_data' => hideData(myencrypt(json_encode(['portfolio' => $data->portfolio ])))]);
		return redirect()->to(site_url('Admin/Portfolio'))->with('success', 'Categoria <b>'.$data->portfolio['categories'][$vars[1]]['title'].'</b> ha sido '.($data->portfolio['categories'][$vars[1]]['status'] == 1 ? 'Activada' : 'Desactivada'));
	}
	
	public function portfolioAddCategorie() {
		$sectM = new Sections();
		$vars = $this->request->getVar();
		$formRules = [
			'category.title' => [
				'label' => 'Titulo de Categoria',
				'rules' => 'required|min_length[1]|max_length[50]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			]
		];
		$vars['category']['slug'] = $this->slugify($vars['category']['title']);
		$vars['category']['status'] = 1;
		$validated = $this->validate($formRules);
		if($validated) {
			$data = $sectM->getAll(['id' => 5]);
			$data->portfolio->data = hideData(myencrypt($data->portfolio->id));
			$data->portfolio->id = hideData(myencrypt($data->portfolio->id));
			$data->portfolio = json_decode(json_encode($data->portfolio), true);
			$data->portfolio['categories'][$vars['category']['slug']] = $vars['category'];

			$id = mydecrypt(showData($vars['portfolio']['data']));
			$data->portfolio['time1'] = time();
	    $data->portfolio['time2'] = date('Y-m-d H:i:s');
	    $sectM = new Sections();
	    $r = $sectM->update($id, ['section_data' => hideData(myencrypt(json_encode(['portfolio' => $data->portfolio])))]);
			return redirect()->to(site_url('Admin/Portfolio'))->with('success', 'Se ha guardado correctamente');
		}
		return view('admin/portfolio', [
			'portfolio' => $vars['portfolio'],
			'validation' => $this->validator,
		]);
	}
	
	public function portfolioAddImage() {
		$sectM = new Sections();
		$vars = $this->request->getVar();
		
		$formRules = [
			'portafolio.title' => [
				'label' => 'Titulo de Categoria',
				'rules' => 'required|min_length[1]|max_length[50]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'uploadThumb' => [
				'label' => 'Imagen',
				'rules' => [
        	'uploaded[uploadThumb]',
        	'mime_in[uploadThumb,image/jpg,image/jpeg,image/png]',
        	'max_size[uploadThumb,4096]|max_dims[uploadThumb,600,400]',
        ],
        'errors' => [
					'required' => 'La {field} es necesaria',
				]
      ],
		];
		$validated = $this->validate($formRules);
		if($validated) {
			$image_url = $this->request->getFile('uploadThumb');
      $fName = $image_url->getRandomName();
      $rimg = $image_url->move(realpath(__DIR__.'/../..') . '/public/assets/images/portfolio/', $fName);
    	$vars['portafolio']['image_url'] = base_url('assets/images/portfolio/'.$fName);
			$vars['portafolio']['status'] = 1;
			$vars['portafolio']['time1'] = time();
	    $vars['portafolio']['time2'] = date('Y-m-d H:i:s');
	    $imageM = new Portfolio();
	    $r = $imageM->save(['item_data' => hideData(myencrypt(json_encode($vars['portafolio'])))]);
			return redirect()->to(site_url('Admin/Portfolio'))->with('success', 'Se ha guardado correctamente');
		}
		return redirect()->to(site_url('Admin/Portfolio'))->with('error', 'No se pudo guardar la imagen, intente nuevamente');
	}

	public function portfolioGetImages() {
		$imagesM = new Portfolio();
		$data = $imagesM->getAll(['status' => 1]);
		
		foreach ($data as $key => $value) {
			$data[$key]->data = hideData(myencrypt($value->id));
		}
		return $this->setResponseFormat('json')->respond(['success' => true, 'data' => $data]);
	}


//portfolioActivateImage
//portfolioDeactivateImage

	

	public function portfolioStatusImage($id=null, $status=1) {
		$imageM = new Portfolio();
		$id = mydecrypt(showData($id));
		$data = $imageM->getAll(['id' => $id]);
		$data = count($data)>0?(array)$data[0]:null;
		if(!$data) {
			return $this->respond(['success' => false, 'message' => 'No se encontro el registro '.$id], 404, 'No se encontro el registro '.$id);
		}
		$data['status'] = $status;
		$del = $imageM->update($id, ['item_data' => hideData(myencrypt(json_encode($data)))]);
		if($del) {
			return $this->respond(['success' => true, 'message' => 'Registro eliminado'], 200);
		}
		return $this->respond($data, 403, 'No se pudo eliminar el registro '.$id);
	}

	public function portfolioDelImage($id=null) {
		$imageM = new Portfolio();
		$id = mydecrypt(showData($id));
		$data = $imageM->getAll(['id' => $id]);
		$data = count($data)>0?(array)$data[0]:null;
		if(!$data) {
			return $this->respond(['success' => false, 'message' => 'No se encontro el registro '.$id], 404, 'No se encontro el registro '.$id);
		}
		$del = $imageM->delete($id);
		if($del) {
			if(!empty($data['image_url'])) {
				$fName = basename($data['image_url']);
				$filePath = realpath(__DIR__.'/../..') . '/public/assets/images/portfolio/'.$fName;
	      if(file_exists($filePath)) {
	      	@chmod($filePath, 0777);
	      	@unlink($filePath);
	      }
			}
			return $this->respond(['success' => true, 'message' => 'Registro eliminado'], 200);
		}
		return $this->respond($data, 403, 'No se pudo eliminar el registro '.$id);
	}

	public function ourFooter() {
		$sectM = new Sections();
		$data = $sectM->getAll(['id' => 7]);
		$validation =  \Config\Services::validation();
		//$data->footer = $data->porfolio;
		$data->footer->data = hideData(myencrypt($data->footer->id));
		$data->footer->id = hideData(myencrypt($data->footer->id));
		$data->footer = json_decode(json_encode($data->footer), true);
		return view('admin/footer', [
			'footer' => (array)$data->footer,
			'validation' => $validation,
		]);
	}

	public function footerUpdate() {
		$vars = $this->request->getVar();
		$formRules = [
			'footer.data' => [
				'label' => 'Seccion ID',
				'rules' => 'required|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El ID de la Sección es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'footer.razonSocial' => [				
				'label' => 'Razón Social',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'footer.rif' => [		
				'label' => 'RIF (Registro de Información Fiscal)',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'La {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'footer.address' => [		
				'label' => 'Dirección Fiscal',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'footer.phone' => [		
				'label' => 'Teléfono',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'El {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'El {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'footer.email' => [		
				'label' => 'Correo Eletrónico',
				'rules' => 'required|trim|min_length[1]|max_length[200]',
				'errors' => [
					'required' => 'El {field} es necesario',
					'min_length' => 'El {field} es muy corto, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'El {field} es muy largo, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'footer.facebook' => [		
				'label' => 'URL Facebook',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'footer.twitter' => [		
				'label' => 'URL Twitter',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'footer.instagram' => [		
				'label' => 'URL Instagram',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'footer.google' => [		
				'label' => 'URL Google',
				'rules' => 'required|trim|min_length[1]|max_length[100]',
				'errors' => [
					'required' => 'La {field} es necesaria',
					'min_length' => 'La {field} es muy corta, debe tener al menos {param} caracteres, verifique',
					'max_length' => 'La {field} es muy larga, debe tener al máximo {param} caracteres, verifique',
				]
			],
			'uploadThumb' => [
				'label' => 'Imagen',
				'rules' => [
        	'uploaded[uploadThumb]',
        	'mime_in[uploadThumb,image/jpg,image/jpeg,image/png]',//image/jpg,image/jpeg,
        	'max_size[uploadThumb,4096]',
        ],
        'errors' => [
					'required' => 'La {field} es necesaria',
				]
      ],
		];
		$validated = $this->validate($formRules);
		//dd($vars, $formRules, $validated);
		if($validated) {
			$vars['footer']['status'] = 1;
			$vars['footer']['time1'] = time();
	    $vars['footer']['time2'] = date('Y-m-d H:i:s');
	    $image_url = $this->request->getFile('uploadThumb');
      $fName = 'logo.'.($image_url->getExtension() ?? $image_url->guessExtension());
      $rimg = $image_url->move(realpath(__DIR__.'/../..') . '/public/assets/images/', $fName);
    	$vars['footer']['image_url'] = base_url('assets/images/'.$fName);

      $id = mydecrypt(showData($vars['footer']['data']));
      unset($vars['footer']['data']);
      $sectM = new Sections();
      $r = $sectM->update($id, ['section_data' => hideData(myencrypt(json_encode(['footer' => $vars['footer']])))]);
      return redirect()->to(site_url('Admin/General'))->with('success', 'Se ha guardado correctamente');;
		}
		return view('admin/footer', [
			'footer' => $vars['footer'],
			'validation' => $this->validator,
		]);
	}

	public function saveContact() {
		define("RECAPTCHA_V3_SECRET_KEY", '6LcxHakZAAAAAIAcYp7l49n5hsRDaJmOSbU1yZqU');
		// call curl to POST request
		$token = $this->request->getVar('token');
		$action = $this->request->getVar('action');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		$arrResponse = json_decode($response, true);
		 
		// verify the response
		if($arrResponse["success"] == true && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.6) {
			$sectM = new Contacto();
			$vars = $this->request->getVar();
			$sectM->save($vars);
			$email = \Config\Services::email();

	      //$email->setTo('globalcreativodg@gmail.com');
	      $email->setTo($email->fromEmail);
	      $email->setBCC('mmorales@olimpussoft.com');
	      $subject = 'Contacto Web';
	      $email->setSubject($subject);
	      $dataMsg = (array) $this->__company;
	      $dataMsg['subject'] = $subject;
	      $dataMsg['message'] = 'Hemos recibido un contacto desde la pagina web.<br>Los datos son los siguientes:<div style="text-align: justify;"><ul>';
	      foreach ($vars as $key => $value) {
	      	if(in_array(strtolower($key), ['token', 'action'])) {
	      		continue;
	      	}
	      	$key = $key=='name'?'Nombre':$key;
	      	$key = $key=='email'?'Correo':$key;
	      	$key = $key=='phone'?'Teléfono':$key;
	      	$key = $key=='subject'?'Asunto':$key;
	      	$key = $key=='message'?'Mensaje':$key;
	      	$dataMsg['message'].= '<li><b>'.$key.'</b>: '.$value.'</li>';
	      }
	      $dataMsg['message'].= '</ul><br>';
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
			//return redirect()->to(site_url('/'))->with('success', 'Se ha guardado correctamente');
			$arrResponse['message'] = 'Se ha guardado correctamente';
			return $this->respond($arrResponse, 200);
		} else {
			$arrResponse["success"] = false;
			$arrResponse['message'] = 'No se pudo validar el captcha';
			return $this->respond($arrResponse, 401);
		}
	}
	
}
