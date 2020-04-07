<?php
    $dns = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dns,$dbuser,$dbpass);

        $nome = "teste";
        $email = "uo@uol.com";
        $id = 3;

        $sql = "UPDATE usuarios set nome = :nome where id = :id";
        $sql = $pdo->prepare($sql);

        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":id", $id);
        $sql->execute();

        echo "usuario atualizado com sucesso";
    }catch (PDOException $e){
        echo "Conexão Falhou: ".$e->getMessage();
    }