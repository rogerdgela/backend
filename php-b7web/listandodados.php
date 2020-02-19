<?php
    $dns = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dns,$dbuser,$dbpass);

        $sql = "Select * from usuarios WHERE email = 'dgelask8@gmail.co'";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0){
            foreach ($sql->fetchAll() as $users){
                echo "Nome: ".$users['nome']." - Email: ".$users['email']."<br>";
            }
        }else{
            echo "Não a listagem";
        }
    }catch (PDOException $e){
        echo "Conexão Falhou: ".$e->getMessage();
    }