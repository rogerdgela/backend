<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $dados = [];

        $contatos = new Contatos();

        $dados['lista'] = $contatos->getAll();

        $this->loadTemplate('home', $dados);
    }
}