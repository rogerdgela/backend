<?php
session_start();

if(empty($_SESSION['dono'])){
    $_SESSION['dono'] = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
}

$token = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);

if($token !== $_SESSION['dono']){
    echo "Opa Aqui não safado";
    exit();
}

echo "Passou";
var_dump($_SESSION);