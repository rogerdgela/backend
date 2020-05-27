<?php

$pdo = new PDO("mysql:dbname=teste;host=localhost", "root","");

$sql = $pdo->query("SELECT * FROM usuarios");
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

var_dump($dados);