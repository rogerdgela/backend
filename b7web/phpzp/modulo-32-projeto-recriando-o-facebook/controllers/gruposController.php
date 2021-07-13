<?php


class gruposController extends controller
{
    public function __construct()
    {
        $u = new usuarios();
        $u->verificarLogin();
    }

    public function abrir($id_grupo)
    {
        $u = new usuarios();
        $g = new grupos();
        $p = new posts();

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

            $p->addPost($postmsg, $foto, $id_grupo);
        }

        $dados['info'] = $g->getInfo($id_grupo);
        $dados['is_membro'] = $g->isMembro($id_grupo, $_SESSION['lgsocial']);
        $dados['qty_membros'] = $g->getQtyMembros($id_grupo);
        $dados['feed'] = $p->getFeed($id_grupo);

        $this->loadTemplate('grupo', $dados);
    }

    public function entrar($id_grupo)
    {
        $id_usuario = $_SESSION['lgsocial'];
        $g = new grupos();
        $g->addGrupo($id_grupo, $id_usuario);

        header("Location: " . BASE . "grupos/abrir/" . $id_grupo);
    }
}