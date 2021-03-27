<?php
namespace Controllers;

use \Core\Controller;
use Models\Jwt;
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
                $array['error'] = 'E-mail e/ou senha não preenchido';
            }
        }else {
            $array['error'] = 'Método de requisição incompatível';
        }

        $this->returnJson($array);
    }

    public function new_record()
    {
        $array = ['error' => ''];

        $method = $this->getMethod();
        $data = $this->getResquestData();

        if($method == 'POST'){
            if(!empty($data['name']) && !empty($data['email']) && !empty($data['pass'])){
                if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                    $users = new Users();

                    if($users->create($data['name'], $data['email'], $data['pass'])){

                        $array['jwt'] = $users->createJwt();
                    }else{
                        $array['error'] = 'E-mail já existente';
                    }
                }else{
                    $array['error'] = 'E-mail inválido';
                }
            }else{
                $array['error'] = 'Dados não preenchidos';
            }
        }else{
            $array['error'] = 'Método de requisição incompativel';
        }

        $this->returnJson($array);
    }
}