<?php

class Usuario
{
    public $nome;
    public $email;
}

$user = new Usuario();
$user->nome = "Dgela";
$user->email = "dgelask8@gmail.com";

$user2 = new Usuario();
$user2->nome = "Maria";
$user2->email = "maria@gmail.com";

$arrayObject = new ArrayObject($user);

foreach ($arrayObject->getIterator() as $v){
    echo $v."<br>";
}

/*$arrayObj = [$user, $user2];

$iterator = new ArrayObject($arrayObj);

foreach ($iterator as $v){
    foreach ($v as $v2){
        echo $v2.'<br>';
    }
    echo "<hr>";
}*/
