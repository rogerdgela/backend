<?php
$arquivo = $_FILES['foto'];
$dir = "fotos/";

$tipos_arquivos = array('image/png','image/jpg');
$novo_nome = md5(rand(0,999).time()).".jpg";
if(!empty($arquivo)){
    if(in_array($arquivo['type'],$tipos_arquivos)){
        move_uploaded_file($arquivo['tmp_name'], $novo_nome);
        echo "Foto Enviada";
    }else{
        echo "Tipo de arquivo não válido";
    }

}