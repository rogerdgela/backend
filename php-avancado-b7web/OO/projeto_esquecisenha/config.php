<?php
try{
    $pdo = new PDO("mysql:dbname=projeto_esquecisenha;host=localhost", "root", "");
}catch (PDOException $e){
    echo "Erro: ".$e->getMessage();
}
