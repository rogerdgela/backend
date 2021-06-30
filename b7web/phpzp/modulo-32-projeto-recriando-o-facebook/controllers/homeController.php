<?php
class homeController extends controller
{
    public function __construct()
    {
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

        $dados['sugestoes'] = $u->getSugestoes(3);

        $r = new relacionamentos();
        $dados['requisicoes'] = $r->getRequisicoes();
        $dados['totalamigos'] = $r->getTotalAmigos($_SESSION['lgsocial']);

        $this->loadTemplate('home', $dados);
    }
}