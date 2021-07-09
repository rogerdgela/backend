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

    public function curtir()
    {
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = addslashes($_POST['id']);
            $id_usuario = $_SESSION['lgsocial'];

            $p = new posts();
            if($p->isLiked($id, $id_usuario)) {
                $p->removeLike($id, $id_usuario);
            }else{
                $p->addLike($id, $id_usuario);
            }
        }
    }

    public function comentar()
    {
        $id = addslashes($_POST['id']);
        $id_usuario = $_SESSION['lgsocial'];
        $texto = addslashes($_POST['txt']);

        $p = new posts();
        if(!empty($texto)){
            echo $p->addComentario($id, $id_usuario, $texto);
        }
    }
}