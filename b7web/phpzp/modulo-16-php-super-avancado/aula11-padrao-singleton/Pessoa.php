<?php


class Pessoa
{
    private $nome;
    private $idade;

    public static function getInstance()
    {
        static $instance = null;

        if($instance === null){
            $instance = new Pessoa();
        }

        return $instance;
    }

    private function __construct()
    {
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
}

$cara = Pessoa::getInstance();
$cara->setNome('Rogerio');

$cara2 = Pessoa::getInstance();
$cara2->setIdade(20);

echo "Meu nome é: " . $cara->getNome() . " e tenho " . $cara->getIdade() . " anos";