<?php

$pdo = new PDO("mysql:dbname=teste;host=localhost", "root","");

$sql = $pdo->query("SELECT * FROM usuarios");
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "Numero de registros: " . $sql->rowCount();

var_dump($dados);