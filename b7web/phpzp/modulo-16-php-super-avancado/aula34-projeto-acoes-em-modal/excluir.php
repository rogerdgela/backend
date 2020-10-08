<?php
$pdo = new PDO('mysql:dbname=aula_modal;host=localhost','root','');

$id = $_POST['id'];

$sql = $pdo->query("DELETE FROM usuarios WHERE id = '$id'");

?>