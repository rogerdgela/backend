<?php
    if(empty($_SESSION['cLogin'])){
        header('Location: ' . BASE_URL . 'login');
        exit();
    }

    if(isset($id) && !empty($id_anuncio)){
        $a = new Anuncios();
        $id_anuncio = $a->excluirFoto($id, $id_anuncio);
    }

    if(isset($id_anuncio)){
        header('Location: ' . BASE_URL . 'anuncios/edit/' . $id_anuncio);
    }else{
        header('Location: ' . BASE_URL . 'anuncios/');
    }
?>