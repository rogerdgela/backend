<?php

class Pessoa
{
    public $sexo;
    public $raca;
    public $idade;
}

$joao = new Pessoa();
$joao->sexo = "masculino";
$joao->raca = "branco";
$joao->idade = 18;

$maria = new Pessoa();
$maria->sexo = "feminino";
$maria->raca = "negra";
$joao->idade = 21;

echo $joao->sexo; //masculino
echo "<br>";
echo $maria->sexo; //feminino