<?php
class HomeController extends controller
{

    public function index()
    {
        $dados = [];

        $contatos = new Contatos();

        $dados['lista'] = $contatos->getAll();

        $this->loadTemplate('home', $dados);
    }
}