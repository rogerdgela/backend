<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $dados = [];

        $fotos = new Fotos();
        $fotos->saveFoto();
        $dados['fotos'] = $fotos->getFotos();

        $this->loadTemplate('home', $dados);
    }
}