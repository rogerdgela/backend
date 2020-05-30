<?php

class Pessoa
{
    public $nome;
    public $sexo;
    public $raca;
    public $idade;

    public function digaOla($tio = "Rogerio")
    {
        if($this->sexo == "masculino"){
            echo "Olá tio ".$tio.", aqui é o ".$this->nome;
        }else{
            echo "Olá tio ".$tio.", aqui é a ".$this->nome;
        }
    }
}

class Homem extends Pessoa
{
    public $sexo = "masculino";
}

class Mulher extends Pessoa
{
    public $sexo = "feminino";
}

$joao = new Homem();
$joao->nome = "João";
$joao->raca = "branco";
$joao->idade = 18;

$maria = new Mulher();
$maria->nome = "Maria";
$maria->raca = "branco";
$maria->idade = 18;

echo $joao->digaOla("Di");
echo "<br>";
echo $maria->digaOla("Anderson");
