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

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            $u = new usuarios();

            if($u->fazerLogin($email,$senha)){
                header("Location: /");
                exit();
            }
        }

		$this->loadView('login', $dados);
	}

	public function cadastro()
    {
        $dados = [];

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            if(!empty($nome) && !empty($email) && !empty($senha)){
                $u = new usuarios();

                if(!$u->usuarioExiste($email)){
                    $_SESSION['twlg'] = $u->inserirUsuario($nome, $email, $senha);

                    header("Location: /");
                }else{
                    $dados['aviso'] = "Este usuário ja existe";
                }
            }else{
                $dados['vazio'] = "Preencha todos os campos";
            }
        }

        $this->loadView('cadastro', $dados);
    }

    public function sair()
    {
        unset($_SESSION['twlg']);

        header("Location: /login");
    }
}