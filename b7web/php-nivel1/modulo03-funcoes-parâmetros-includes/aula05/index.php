<?php
function somar($n1, $n2, &$total){
    $total = $n1 + $n2;
}

$x = 3;
$y = 2;
$soma = null;

somar($x,$y, $soma);

echo $soma;

/*function somar($n1, $n2){
    $total = $n1 + $n2;

    return $total;
}

echo somar(1,6);*/