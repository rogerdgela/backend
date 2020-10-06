<?php
class galeriaController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $albuns = new Albuns();

        $dados = [
            'albuns' => $albuns->getList()
        ];

        $this->loadTemplate('galeria', $dados);
    }

    public function abrir($slug) {
        $albuns = new Albuns();

        $titulo = $albuns->getAlbum($slug);

        $dados = [
            'album' => $titulo['titulo']
        ];

        $this->loadTemplate('album', $dados);
    }
}