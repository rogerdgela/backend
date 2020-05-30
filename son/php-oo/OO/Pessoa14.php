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

$joao = new Pessoa();
$joao->nome = "João";
$joao->sexo = "masculino";
$joao->raca = "branco";
$joao->idade = 18;

$maria = new Pessoa();
$maria->nome = "Maria";
$maria->sexo = "feminino";
$maria->raca = "branco";
$maria->idade = 18;

echo $joao->digaOla("Di");
echo "<br>";
echo $maria->digaOla("Anderson");