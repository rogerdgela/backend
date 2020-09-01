<?php


class CadastroController extends Controller
{
    public function index()
    {
        $dados = [];

        $u = new Usuarios();

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = ($_POST['senha']);
            $telefone = addslashes($_POST['telefone']);

            if(!empty($nome) && !empty($email) && !empty($senha)){
                if($u->cadastrar($nome, $email, $senha, $telefone)){
                    $dados['mensagem'] = '<div class="alert alert-success">
                        <strong>Parabéns</strong> cadastrado com sucesso. <a href="' . BASE_URL . 'login" class="alert-link">Faça o login agora</a>
                    </div>';
                }else{
                    $dados['mensagem'] = '<div class="alert alert-warning">
                        Este usuário já existe. <a href="' . BASE_URL . 'login" class="alert-link">Faça o login agora</a>
                    </div>';
                }
            }else{
                ?>
                <div class="alert alert-warning">
                    Preencha todos os campos!
                </div>
                <?php
            }
        }

        $this->loadTemplate('cadastro', $dados);
    }
}