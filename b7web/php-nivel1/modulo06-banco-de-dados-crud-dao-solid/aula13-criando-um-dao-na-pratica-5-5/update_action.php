<?php

require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

if($id && $nome && $email){
    /*$usuario = $usuarioDao->findById($id);*/
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($nome);
    $usuario->setEmail($email);

    $usuarioDao->update($usuario);

    header('Location: index.php');
    exit();
}else{
    header('Location: editar.php?id='.$id);
    exit();
}