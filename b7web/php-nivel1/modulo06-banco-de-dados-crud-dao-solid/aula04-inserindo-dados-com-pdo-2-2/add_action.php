<?php

require_once 'config.php';

$nome = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDADE_EMAIL);

if($nome and $email){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){
        $add_user = $pdo->prepare("INSERT INTO usuarios (nome, senha) VALUES (:nome, :email)");
        $add_user->bindValue(':nome', $nome);
        $add_user->bindValue(':email', $email, PDO::PARAM_STR);
        $add_user->execute();

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

