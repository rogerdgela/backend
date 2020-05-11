<?php
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$usuario = filter_input(INPUT_POST,'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_NUMBER_INT);

//filter_var("teste ",FILTER_SANITIZE_NUMBER_INT);

if($usuario and $senha and $email){
    echo "usuario: ".$usuario;
    echo "<br>";
    echo "senha: ".$senha;
    echo "<br>";
    echo "email: ".$email;
}else{
    header('Location: index.php');
    exit();
}