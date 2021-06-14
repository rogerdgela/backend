<?php


class loginController extends controller
{
	public function index()
	{
		$dados = [];

		$this->loadView('login', $dados);
	}

	public function cadastro()
    {
        $dados = [];

        if(isset($_POST['nome']) && !empty($_POST['nome'])){

        }

        $this->loadView('cadastro', $dados);
    }
}