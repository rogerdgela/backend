<?php
require_once "Polimosfismo.php";

$quadrado = new Quadrado(5,5);
$circulo = new Circulo(5);

$objetos = [
    $quadrado,
    $circulo
];
var_dump($objetos);
foreach ($objetos as $objeto){

    echo "Tipo: " . $objeto->getTipo() . " - Area: ". $objeto->getArea() . "<br>";
}