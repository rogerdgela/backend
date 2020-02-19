<?php
class Animal {
    public $nome;
    public $idade;
}

class Cavalo extends Animal {
    private $quantidade_de_patas;
    private $tipo_de_pelo;
}

class Gato extends Animal {
    private $quantidade_de_patas;
    private $miado;
}

$cavalo = new Cavalo();
$cavalo->nome = "dgela";

echo "O nome do cavalo é: ".$cavalo->nome;
