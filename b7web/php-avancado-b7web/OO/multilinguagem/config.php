<?php
try{
    global $pdo;
    $pdo = new PDO("mysql:dbname=multilanguagem;host=localhost", "root", "");
}catch (PDOException $e){
    echo "Erro: ".$e->getMessage();
}
