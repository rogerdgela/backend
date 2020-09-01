<?php


class ProdutoController extends Controller
{
    public function index(){}

    public function visualizar($id)
    {
        $dados = [];
        $a = new Anuncios();
        $u = new Usuarios();

        if(empty($id)){
            header('Location: ' . BASE_URL);
            exit();
        }

        $info = $a->getAnuncio($id);

        $dados['info'] = $info;

        $this->loadTemplate('produto', $dados);
    }
}