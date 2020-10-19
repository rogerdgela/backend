<?php


class ContatosController extends controller
{

    public function index(){}

    public function add()
    {
        $dados = ['error' => ''];

        if(!empty($_GET['error'])){
            $dados['error'] = $_GET['error'];
        }

        $this->loadTemplate('add', $dados);
    }

    public function add_save()
    {
        if(!empty($_POST['email'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

            $contatos = new Contatos();
            if($contatos->add($nome, $email)){
                header('Location: '.BASE_URL);
            }else{
                header('Location: '.BASE_URL.'contatos/add?error=exist');
            }
        }else{
            header('Location: '.BASE_URL.'contatos/add');
        }
    }

    public function edit($id)
    {
        $dados = ['info' => ''];

        if(!empty($id)){
            $contatos = new Contatos();

            if(!empty($_POST['nome'])){
                $nome = addslashes($_POST['nome']);
                $email = addslashes(mb_strtolower($_POST['email']));

                $contatos->edit($nome, $email, $id);
            }else{
                $dados['info'] = $contatos->get($id);

                if(isset($dados['info']['id'])){
                    $this->loadTemplate('edit', $dados);
                    exit();
                }
            }
        }

        header('Location: '.BASE_URL);
    }

    public function del($id)
    {
        if(!empty($id)){
            $contatos = new Contatos();
            $contatos->delete($id);
        }

        header('Location: '.BASE_URL);
    }
}