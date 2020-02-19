<?php
    /*$arquivo = $_FILES['arquivo'];

    if(isset($arquivo['tmp_name']) and !empty($arquivo['tmp_name'])){
        $nomeaquivo = md5(time().rand(0,99)).'.jpg';
        move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$nomeaquivo);
        echo "Arquivo enviado com sucesso";
    }*/

    $arquivo = $_FILES['arquivos'];

    if(isset($arquivo['tmp_name']) and !empty($arquivo['tmp_name'])){
        if(count($arquivo['tmp_name']) > 0){
            for($q=0; $q<count($arquivo['tmp_name']); $q++){
                move_uploaded_file($arquivo['tmp_name'][$q], 'arquivos/'.$arquivo['name'][$q]);
            }

            echo "Upload de arquivos com sucesso";
        }
    }
?>