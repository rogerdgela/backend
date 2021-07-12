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

        $dados = [
            'usuario_nome' => ''
        ];

        $dados['usuario_nome'] = $u->getNome($_SESSION['lgsocial']);
        $dados['info'] = $g->getInfo($id_grupo);
        $dados['is_membro'] = $g->isMembro($id_grupo, $_SESSION['lgsocial']);
        $dados['qty_membros'] = $g->getQtyMembros($id_grupo);

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