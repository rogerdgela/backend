<?php
class homeController extends controller
{
    public function __construct()
    {
        parent::__construct();

        $u = new usuarios();
        $u->verificarLogin();
    }

    public function index()
    {
        $dados = [
            'usuario_nome' => ''
        ];

        $u = new usuarios();
        $dados['usuario_nome'] = $u->getNome($_SESSION['lgsocial']);

        $this->loadTemplate('home', $dados);
    }
}