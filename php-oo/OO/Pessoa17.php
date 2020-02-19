<?php

class Pessoa
{
    public $nome;
    public $sexo;
    public $raca;
    public $idade;

    public function __construct($nome, $raca, $idade)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
    }

    public function digaOla($tio = "Rogerio")
    {
        if($this->sexo == "masculino"){
            echo "Olá ".$tio.", aqui é o ".$this->nome;
        }else{
            echo "Olá ".$tio.", aqui é a ".$this->nome;
        }
    }
}

class Homem extends Pessoa
{
    public $sexo = "masculino";

    public function __construct($nome, $raca, $idade)
    {
        parent::__construct(strtoupper($nome), $raca, $idade);
    }
}

class Mulher extends Pessoa
{
    public $sexo = "feminino";

    public function __construct($nome, $raca, $idade)
    {
        parent::__construct(strtolower($nome), $raca, $idade);
    }
}

$joao = new Homem("João", "Branco", 18);
$maria = new Mulher("Maria", "negra", 22);

echo $joao->digaOla("Di");
echo "<br>";
echo $maria->digaOla("Anderson");