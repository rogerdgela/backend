<?php

class Pessoa
{
    public $nome;
    public $sexo;
    public $raca;
    public $idade;

    public function digaOla()
    {
        echo "Olá ".$this->nome;
    }
}

$joao = new Pessoa();
$joao->nome = "João";
$joao->sexo = "masculino";
$joao->raca = "branco";
$joao->idade = 18;

$maria = new Pessoa();
$maria->nome = "Maria";
$maria->sexo = "feminino";
$maria->raca = "negra";
$joao->idade = 21;

echo $joao->digaOla();
echo "<br>";
echo $maria->digaOla();
