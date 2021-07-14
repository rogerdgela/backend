<?php


class buscaController extends controller
{
    public function __construct()
    {
        $u = new usuarios();
        $u->verificarLogin();
    }

    public function index()
    {
        $u = new usuarios();

        $dados = [
            'usuario_nome' => ''
        ];

        $dados['usuario_nome'] = $u->getNome($_SESSION['lgsocial']);
        $dados['resultado'] = $u->procurar($_GET['q']);

        $this->loadTemplate('busca', $dados);
    }
}