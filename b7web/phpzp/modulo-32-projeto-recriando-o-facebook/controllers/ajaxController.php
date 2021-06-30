<?php


class ajaxController extends controller
{
    public function __construct()
    {
        $u = new usuarios();
        $u->verificarLogin();
    }

    public function index() {}

    public function add_friend()
    {
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = addslashes($_POST['id']);

            $r = new relacionamentos();
            $response = $r->addFriend($_SESSION['lgsocial'], $id);

            echo $response;
        }
    }

    public function aceitar_friend()
    {
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = addslashes($_POST['id']);

            $r = new relacionamentos();
            $response = $r->aceitarFriend($_SESSION['lgsocial'], $id);

            echo $response;
        }
    }
}