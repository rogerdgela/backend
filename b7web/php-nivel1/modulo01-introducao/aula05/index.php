<?php
$bolo1 = array(
    'Açucar',
    'Farinha de Trigo',
    'Ovo',
    'Leite',
    'Fermento em pó'
);

$bolo2 = [
    'teste',
    ...$bolo1, // Array Spread
    'Corante'
];

$bolo3 = [...$bolo1, ...$bolo2];

echo "<pre>";
var_dump($bolo3);
echo "</pre>";
