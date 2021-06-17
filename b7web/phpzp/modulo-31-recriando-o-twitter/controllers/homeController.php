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
        $dados = [];

        $u = new usuarios($_SESSION['twlg']);
        $dados['nome'] = $u->getNome();
        $dados['qt_seguidos'] = $u->countSeguidos();
        $dados['qt_seguidores'] = $u->countSeguidores();
        $dados['sugestao'] = $u->getUsuarios(5);

        $this->loadTemplate('home', $dados);
    }

    public function seguir($id)
    {
        if(!empty($id)){
            $u = new usuarios();
            $id = addslashes($id);
            if($u->userExite($id)){
                $r = new relacionamentos();
                $r->seguir($_SESSION['twlg'], $id);
            }
        }

        header("Location: /");
    }

    public function deseguir($id)
    {
        if(!empty($id)){
            $u = new usuarios();
            $id = addslashes($id);
            if($u->userExite($id)){
                $r = new relacionamentos();
                $r->deseguir($_SESSION['twlg'], $id);
            }
        }

        header("Location: /");
    }
}