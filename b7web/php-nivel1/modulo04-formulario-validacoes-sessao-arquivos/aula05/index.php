<?php
session_start();

require_once "header.php";

if($_SESSION['mensagem']){
    echo $_SESSION['mensagem'];
    $_SESSION['mensagem'] = '';
}
?>
<a href="apagar.php">apagar cookie</a>
<form method="post" action="recebedor.php">
    <label>Nome:</label><br>
    <input type="text" name="nome"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email"><br><br>

    <label>Idade:</label><br>
    <input type="text" name="idade"><br><br>

    <input type="submit" value="Enviar">
</form>
