<?php
    $dns = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dns,$dbuser,$dbpass);

        $sql = "Update usuarios set email = 'dgela@gmail.com' where id = 2";
        $pdo->query($sql);

        echo "usuario altualizado com sucesso";
    }catch (PDOException $e){
        echo "Conexão Falhou: ".$e->getMessage();
    }