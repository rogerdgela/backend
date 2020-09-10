<?php
/*$json = file_get_contents('https://api.hgbrasil.com/finance?key=62afe9ca');

$json = json_decode($json);

$obj = new stdClass();
$obj->name = 'Brasil';
$obj->buy = 1;
$obj->sell = 2;
$obj->variation = -1;

$json->results->currencies->BRA = $obj;*/

/*foreach ($json->results->currencies as $item){
    echo 'Moeda: '. $item->name. ' - Compra: ' . $item->buy .'<br>';
}*/

$json = [
    'name' => 'Roger',
    'years' => 36,
    'city' => 'Joinville'
];

echo json_encode($json);