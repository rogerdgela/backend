<?php
session_start();

if(!isset($_SESSION['name'])){
    header('Location:login.php');
}else{
    echo "Olá, ".$_SESSION['name'].' - <a href="apagar.php">Sair</a>';
}
?>
