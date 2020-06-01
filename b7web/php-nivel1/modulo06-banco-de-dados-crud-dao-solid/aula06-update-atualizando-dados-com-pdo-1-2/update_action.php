<?php

require_once 'config.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDADE_EMAIL);

if($id && $name && $email){

    $update = $pdo->prepare("UPDATE usuarios SET nome = :nome, $email = :email WHERE id = :id;");
    $update->bindValue(':nome', $nome);
    $update->bindValue(':email', $email);
    $update->bindValue(':id', $id);
    $update->execute();

    header('Location: index.php');
    exit();
}else{
    header('Location: index.php');
    exit();
}