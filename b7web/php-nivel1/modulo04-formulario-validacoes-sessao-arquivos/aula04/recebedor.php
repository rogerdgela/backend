<?php
session_start();
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);

//filter_var("teste ",FILTER_SANITIZE_NUMBER_INT);

if($nome and $email and $idade){
    echo "nome: ".$nome;
    echo "<br>";
    echo "email: ".$email;
    echo "<br>";
    echo "idade: ".$idade;
}else{
    $_SESSION['mensagem'] = "Não foi possivel logar";
    header('Location: index.php');
    exit();
}