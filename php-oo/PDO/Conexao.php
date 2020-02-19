<?php

class Conexao
{
    public function connect()
    {
        try {
            $connection = new \PDO("mysql:host=localhost;dbname=nomedobanco","root","senha");
            return $connection;
        }
        catch (PDOException $e) {
            echo "Erro ao conectar: ".$e->getMessage();
        }
    }
}

$conn = new Conexao();
$conexao = $conn->connect();

$conexao->query("selec * from table");