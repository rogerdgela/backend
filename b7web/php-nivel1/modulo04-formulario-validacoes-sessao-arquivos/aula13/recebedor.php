<?php
echo '<pre>';
print_r($_FILES);

$permitidos = ['application/pdf'];

if(in_array($_FILES['arquivo']['type'], $permitidos)){
    $nome = "teste-".date('d-m-Y-H-i-s').'.pdf';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

    echo "Arquivo salvo com sucesso";
}else{
    echo "Arquivo não permitido";
}

