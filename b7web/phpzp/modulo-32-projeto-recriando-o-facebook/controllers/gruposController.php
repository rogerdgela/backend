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

        $this->loadTemplate('grupo', $dados);
    }
}