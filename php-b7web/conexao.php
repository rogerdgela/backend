<?php
    $dns = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dns,$dbuser,$dbpass);

        echo "Conectado com o banco";
    }catch (PDOException $e){
        echo "Conexão Falhou: ".$e->getMessage();
    }