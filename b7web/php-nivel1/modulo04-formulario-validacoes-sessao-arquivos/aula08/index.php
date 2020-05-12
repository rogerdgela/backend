<?php
$texto = file_get_contents('nome.txt');
$texto .= "\nRoger";

file_put_contents("nome.txt", $texto);

/*$texto = "Rogerio teste";

file_put_contents("nome.txt", $texto);

echo "Arquivo criado com sucesso";*/
