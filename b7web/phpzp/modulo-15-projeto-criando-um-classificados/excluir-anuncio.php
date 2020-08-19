<?php
    require_once 'config.php';
    if(empty($_SESSION['cLogin'])){
        header('Location: login.php');
        exit();
    }

    if(isset($_GET['id']) && !empty($_GET['id'])){
        require_once 'classes/Anuncios.php';
        $a = new Anuncios();

        $a->excluirAnuncio($_GET['id']);
    }

    header('Location: meus-anuncios.php');
?>
