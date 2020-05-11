<?php
$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

if($usuario and $senha){
    echo "usuario: ".$usuario;
    echo "<br>";
    echo "senha: ".$senha;
}else{
    header('Location: index.php');
    exit();
}