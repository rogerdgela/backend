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

    public function edit($id)
    {
        $dados = [];

        if(empty($_SESSION['cLogin'])){
            header('Location: '.BASE_URL.'login/');
            exit();
        }

        $a = new Anuncios();
        $c = new Categorias();

        if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
            $titulo = addslashes($_POST['titulo']);
            $categoria = addslashes($_POST['categoria']);
            $valor = addslashes($_POST['valor']);
            $descricao = addslashes(nl2br($_POST['descricao']));
            $estado = addslashes($_POST['estado']);
            if(isset($_FILES['fotos'])){
                $fotos = $_FILES['fotos'];
            }else{
                $fotos = [];
            }

            if($a->editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, $id)){

                $sucesso = '<div class="alert alert-success">
                                Anúncio Editado com sucesso
                            </div>';
            }
        }

        if(isset($id) && !empty($id)){
            $info = $a->getAnuncio($id);
        }else {
            header('Location: '.BASE_URL.'anuncios/');
            exit();
        }


        $cats = $c->getLista();

        $dados['cats'] = $cats;
        $dados['info'] = $info;

        $this->loadTemplate('edit-anuncio', $dados);
    }

    public function deletefoto($id, $id_anuncio)
    {
        $dados = [];

        $dados['id'] = $id;
        $dados['id_anuncio'] = $id_anuncio;

        $this->loadTemplate('delete-foto', $dados);
    }

    public function delete($id)
    {
        $dados = [];
        $dados['id'] = $id;
        $this->loadTemplate('delete-anuncio', $dados);
    }
}