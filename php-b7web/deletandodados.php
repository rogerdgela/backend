<?php
    $dns = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dns,$dbuser,$dbpass);

        $sql = "delete from usuarios WHERE id = 5";
        $pdo->query($sql);

        echo "usuario deletado com sucesso";
    }catch (PDOException $e){
        echo "Conexão Falhou: ".$e->getMessage();
    }