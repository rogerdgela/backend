<?php

$ingredientes = [
    'Açucar',
    'Farinha de trigo',
    'Ovo',
    'Leite',
    'Fermento em pó',
    'Chocolate'
];

echo "<h2>Ingredientes</h2>";

echo "<ul>";
foreach ($ingredientes as $chave => $ingrediente){
    echo "<li>Item ".($chave + 1).": ".$ingrediente."</li>";
}
echo "</ul>";