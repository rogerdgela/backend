<?php

$nome = "sdcsadRT dsadsad";

echo strpos($nome, "RT");
echo "<br>";
echo ucfirst($nome);
echo "<br>";
echo ucwords($nome);
echo "<br>";
$nome = explode(" ",$nome);
print_r($nome);
echo "<br>";
echo "R$ ".number_format(123.987,2,",",".");