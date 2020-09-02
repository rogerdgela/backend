<?php


class AnunciosController extends Controller
{
    public function index()
    {
        $dados = [];

        if(empty($_SESSION['cLogin'])){
            header('Location: '.BASE_URL.'login/');
            exit();
        }

        $a = new Anuncios();
        $anuncios = $a->getMeusAnuncios();
        $dados['anuncios'] = $anuncios;

        $this->loadTemplate('anuncios', $dados);
    }

    public function add()
    {
        $dados = [];

        if(empty($_SESSION['cLogin'])){
            header('Location: '.BASE_URL.'login/');
            exit();
        }

        $a = new Anuncios();

        if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
            $titulo = addslashes($_POST['titulo']);
            $categoria = addslashes($_POST['categoria']);
            $valor = addslashes($_POST['valor']);
            $descricao = addslashes(nl2br($_POST['descricao']));
            $estado = addslashes($_POST['estado']);

            if($a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado)){

                $sucesso = '<div class="alert alert-success">
                            Anúncio cadastrado com sucesso
                        </div>';
            }
        }

        $c = new Categorias();
        $cats = $c->getLista();

        $dados['cats'] = $cats;

        $this->loadTemplate('add-anuncio', $dados);
    }
}