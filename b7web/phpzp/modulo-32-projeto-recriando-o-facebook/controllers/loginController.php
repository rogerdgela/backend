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

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $sexo = addslashes($_POST['sexo']);

            $u = new usuarios();
            $dados['erro'] = $u->cadastrar($nome, $email, $senha, $sexo);
        }

        $this->loadView('login_cadastrar', $dados);
    }

    public function sair()
    {
        unset($_SESSION['lgsocial']);
        header("Location: " . BASE);
        exit();
    }
}