<?php
    require_once 'config.php';
    if(empty($_SESSION['cLogin'])){
        header('Location: login.php');
        exit();
    }

    if(isset($_GET['id']) && !empty($_GET['id'])){
        require_once 'classes/Anuncios.php';
        $a = new Anuncios();

        $id_anuncio = $a->excluirFoto($_GET['id'], $_GET['id_anuncio']);
    }

    if(isset($id_anuncio)){
        header('Location: editar-anuncio.php?id='.$id_anuncio);
    }else{
        header('Location: meus-anuncios.php');
    }
?>
