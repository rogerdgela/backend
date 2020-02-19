<?php
    $dns = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dns,$dbuser,$dbpass);

        $nome = "Maria";
        $email = "maria@gmail.com";
        $senha = md5("123");

        $sql = "Insert into usuarios set nome = '$nome', email = '$email', senha = '$senha'";
        $sql = $pdo->query($sql);

        echo "usuario inserido com sucesso: ".$sql->lastInsertId();
    }catch (PDOException $e){
        echo "Conexão Falhou: ".$e->getMessage();
    }