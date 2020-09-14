<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=saas;','root','');
}catch (PDOException $e){
    echo 'Falhou'.$e->getMessage();
}

$dominio = $_SERVER['HTTP_HOST'];

$sql = "SELECT * FROM usuarios WHERE dominio = ?";
$sql = $pdo->prepare($sql);
$sql->execute([$dominio]);

if($sql->rowCount() > 0){
    $cliente = $sql->fetch(PDO::FETCH_ASSOC);
    if(file_exists('clientes/'.$cliente['id'].'/index.php')){
        require_once 'clientes/'.$cliente['id'].'/index.php';
    }else{
        echo "Página ainda nao existe";
    }
}else{
    echo "Sistema fora";
}