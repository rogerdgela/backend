<?php
abstract class Animal {
    public $nome;
    public $idade;

    abstract protected function andar();

    public function setNome($n){
        $this->nome = $n;
    }

    public function getNome(){
        return $this->nome;
    }
}

class Cavalo extends Animal{
    private $teste;

    public function andar()
    {
        // TODO: Implement andar() method.
    }
}

$testecavalo = new Cavalo();

$testecavalo->setNome("Teste");
echo $testecavalo->getNome();