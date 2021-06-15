<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();

        $u = new usuarios();
        
        if(!$u->isLogged()){
        	header("Location: /login");
        	exit();
        }
    }

    public function index() {
        $dados = array();

        $this->loadTemplate('home', $dados);
    }

}