<?php

$nome = "    sdcsadRT dsadsad ";

echo trim($nome);
echo "<br>";
echo strlen($nome);
echo "<br>";
echo strtolower($nome);
echo "<br>";
echo strtoupper($nome);
echo "<br>";
echo str_replace("RT","",$nome);
echo "<br>";
echo substr($nome, -2, 2);