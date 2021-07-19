<?php
class homeController extends controller {

	public function __construct() {
		parent::__construct();

		$alunos = new Alunos();

		if(!$alunos->isLogged()) {
		    header("Location: " . BASE . "login");
        }
	}
	
	public function index() {
		$dados = [];

		$this->loadTemplate('home', $dados);
	}

}