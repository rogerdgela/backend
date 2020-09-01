<?php


class LoginController extends Controller
{
    public function index()
    {
        $dados = [];

        $u = new Usuarios();

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];

            if($u->login($email, $senha)){
                header('Location: ' . BASE_URL);
            }else{
                $dados['mensagem'] = '<div class="alert alert-danger">
                    Usuário e/ou senha errados!
                </div>';
            }
        }

        $this->loadTemplate('login', $dados);
    }
}