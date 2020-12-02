<?php
$array = [
    'nome' => 'Dgela',
    'idade' => 36
];

/*if (isset($array['idade'])) {
    $idade = $array['idade'];
} else {
    $idade = '';
}

$idade = (isset($idade['idade'])) ? $array['idade'] : '';*/

$idade = $array['idade'] ?? '';

echo "Idade: " . $idade;