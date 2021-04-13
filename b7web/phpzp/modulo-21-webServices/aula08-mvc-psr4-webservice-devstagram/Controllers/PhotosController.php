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

	public function view($id_photo)
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

			switch ($method){
				case 'GET':
					$array['data'] = $photos->getPhoto($id_photo);
					break;
				case 'DELETE':
					$array['data'] = $photos->deletePhoto($id_photo, $users->getId());
					break;
				default:
					$array['error'] = 'Método '.$method.' não disponível';
					break;
			}

		}else{
			$array['error'] = 'Acesso negado';
		}

		$this->returnJson($array);
	}

	public function comment($id_photo)
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

			switch ($method){
				case 'POST':
					if(!empty($data['txt'])){
						$data['error'] = $photos->addComment($id_photo, $users->getId(), $data['txt']);
					}else{
						$data['error'] = "Não há comentário a ser postado";
					}
					break;
				default:
					$array['error'] = 'Método '.$method.' não disponível';
					break;
			}

		}else{
			$array['error'] = 'Acesso negado';
		}

		$this->returnJson($array);
	}

	public function delete_comment($id_comment)
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

			switch ($method){
				case 'DELETE':
					$array['error'] = $photos->deleteComment($id_comment, $users->getId());
					break;
				default:
					$array['error'] = 'Método '.$method.' não disponível';
					break;
			}

		}else{
			$array['error'] = 'Acesso negado';
		}

		$this->returnJson($array);
	}
}