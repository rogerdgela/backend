<?php
$nome = "Rogerio";
$sobrenome = " Silva";

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome ?? "";

echo $nomeCompleto;