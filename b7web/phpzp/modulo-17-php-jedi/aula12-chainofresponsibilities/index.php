<?php
require_once 'classes.php';

$carga = new Carga(5000);

$moto = new Moto();
$carro = new Carro();
$caminhao = new Caminhao();

$moto->setSucessor($carro);
$carro->setSucessor($caminhao);

$moto->transport($carga);