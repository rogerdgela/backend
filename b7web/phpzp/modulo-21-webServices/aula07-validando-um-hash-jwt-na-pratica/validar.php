<?php
require_once 'Jwt.php';
$jwt = new Jwt();

if(!empty($_GET['jwt'])){
    $token = $_GET['jwt'];

    $info = $jwt->validate($token);

    if($info){
        //echo "Token válido";
        echo "Meu nome é ".$info->nome.' - '.$info->id_user;
        //print_r($info);
    }else{
        echo "Token Invalido";
    }
}else{
    echo "Token nao enviado";
}

//echo "Meu Nome: ".$nome;