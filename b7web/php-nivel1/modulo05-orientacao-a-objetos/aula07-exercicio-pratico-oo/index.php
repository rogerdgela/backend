<?php

require_once "Calculadora.php";

$calc = new  Calculadora();
$calc->somar(20);
$calc->somar(4);
$calc->divide(4);
$calc->multiply(2);
$calc->subtrai(2);

echo "Valor: ".$calc->total();
$calc->clear();
echo "<br>Valor: ";$calc->total();