<?php
$pdo = new PDO('mysql:dbname=aula_modal;host=localhost','root','');

$id = $_POST['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$sql = $pdo->query("UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'");

?>