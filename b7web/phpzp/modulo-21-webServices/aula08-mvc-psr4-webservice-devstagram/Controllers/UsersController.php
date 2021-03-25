<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;

class UsersController extends Controller
{
	public function index(){}

	public function login()
    {
        $array = ['error' => ''];

        $method = $this->getMethod();
        $data = $this->getResquestData();

        if($method === 'POST'){
            if(!empty($data['email']) && !empty($data['pass'])){
                $user = new Users();

                if($user->checkCredentials($data['email'], $data['pass'])){
                    $array['jwt'] = $user->createJwt();
                }else{
                    $array['error'] = 'Acesso negado';
                }
            }else{
                $array['erro'] = 'E-mail e/ou senha não preenchido';
            }
        }else {
            $array['error'] = 'Método de requisição incompatível';
        }

        $this->returnJson($array);
    }
}