<?php


class perfilController extends controller
{
    public function __construct()
    {
        $u = new usuarios();
        $u->verificarLogin();
    }

    public function index()
    {
        $dados = [
            'usuario_nome' => ''
        ];

        $u = new usuarios();
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $bio = addslashes($_POST['bio']);

            $u->updatePerfil([
                'nome' => $nome,
                'bio' => $bio
            ]);

            if(isset($_POST['senha']) && !empty($_POST['senha'])){
                $senha = MD5($_POST['senha']);

                $u->updatePerfil([
                    'senha' => $senha
                ]);
            }
        }

        $dados['usuario_nome'] = $u->getNome($_SESSION['lgsocial']);

        $dados['info'] = $u->getDados($_SESSION['lgsocial']);

        $this->loadTemplate('perfil', $dados);
    }
}