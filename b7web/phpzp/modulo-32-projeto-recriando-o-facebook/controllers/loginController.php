<?php


class loginController extends controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dados = [];

        $this->loadView('login', $dados);
    }

    public function entrar()
    {
        $dados = ['erro' => ''];

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            $u = new usuarios();
            $dados['erro'] = $u->logar($email, $senha);
        }

        $this->loadView('login_entrar', $dados);
    }

    public function cadastrar()
    {
        $dados = [];

        $this->loadView('login_cadastrar', $dados);
    }
}