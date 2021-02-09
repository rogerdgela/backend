<?php
$email = 'dgelask8@gmail.com';
//$email = addslashes("' or '1' = '1"); // sql injection
$senha = 'linuxx';
//$senha = addslashes("' or '1' = '1"); // sql injection

$pdo = new PDO('mysql:dbname=seg_sqlinjection;host=localhost','root','');

$sql = "select * from usuarios where email = :email and senha = :senha";
$sql = $pdo->prepare($sql);
$sql->bindValue(':email', $email);
$sql->bindValue(':senha', $senha);
$sql->execute();

if($sql->rowCount() > 0){
    echo "usuário logado";
}else{
    echo "errou email/senha";
}