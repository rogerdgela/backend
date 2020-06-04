<?php

require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$nome = trim(filter_input(INPUT_POST, 'name'));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

if($nome and $email){
    if($usuarioDao->findByEmail($email) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($nome);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

        header('Location: index.php');
        exit();
    }else{
        header('Location: add_user.php');
        exit();
    }
}else{
    header('Location: add_user.php');
    exit();
}

