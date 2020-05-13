<?php
echo '<pre>';
print_r($_FILES);

$arquivo = $_FILES['arquivo']['name'];
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$arquivo);