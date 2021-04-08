<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;
use \Models\Photos;

class PhotosController extends Controller
{
	public function index(){}

	public function random()
	{
		$array = [
			'error' => '',
			'logged' => false
		];

		$method = $this->getMethod();
		$data = $this->getResquestData();

		$users = new Users();
		$photos = new Photos();

		if(!empty($data['jwt']) && $users->validadeJwt($data['jwt'])){
			$array['logged'] = true;

			if($method == 'GET'){
				$per_page = 10;
				if(!empty($data['per_page'])){
					$per_page = intval($data['per_page']);
				}

				$excludes = [];

				if(!empty($data['excludes'])){
					$excludes = explode(',', $data['excludes']);
				}

				$array['data'] = $photos->getRandonPhotos($per_page, $excludes);
			}else{
				$array['error'] = 'Método '.$method.' não disponível';
			}

		}else{
			$array['error'] = 'Acesso negado';
		}

		$this->returnJson($array);
	}
}