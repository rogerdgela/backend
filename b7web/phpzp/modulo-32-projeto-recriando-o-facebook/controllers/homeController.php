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
        $u = new usuarios();
        $p = new posts();
        $r = new relacionamentos();

        $dados = [
            'usuario_nome' => ''
        ];


        $dados['usuario_nome'] = $u->getNome($_SESSION['lgsocial']);


        if(isset($_POST['post']) && !empty($_POST['post'])){
            $postmsg = addslashes($_POST['post']);
            $foto = [];

            if(isset($_FILES['foto']) && !empty($_FILES['foto']['tmp_name'])){
                $foto = $_FILES['foto'];
            }

            $p->addPost($postmsg, $foto);
        }

        $dados['sugestoes'] = $u->getSugestoes(10);
        $dados['requisicoes'] = $r->getRequisicoes();
        $dados['totalamigos'] = $r->getTotalAmigos($_SESSION['lgsocial']);
        $dados['feed'] = $p->getFeed();

        $this->loadTemplate('home', $dados);
    }
}