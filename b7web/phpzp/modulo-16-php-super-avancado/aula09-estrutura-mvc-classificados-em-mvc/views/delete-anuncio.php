<?php
    if(empty($_SESSION['cLogin'])){
        header('Location: ' . BASE_URL . '/login');
        exit();
    }

    if(isset($id) && !empty($id)){
        $a = new Anuncios();

        $a->excluirAnuncio($id);
    }

    header('Location: ' . BASE_URL . 'anuncios');