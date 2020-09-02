<?php

class Pessoa
{
    private $nome;
    private $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}

class PessoaAdapter
{
    private $sexo;
    private $pessoa;

    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getNome()
    {
        return $this->pessoa->getNome();
    }

    public function getIdade()
    {
        return $this->pessoa->getIdade();
    }
}

$pessoa = new Pessoa("Rogerio", 36);

$pessoa_adapter = new PessoaAdapter($pessoa);
$pessoa_adapter->setSexo('Masculino');

echo "Nome: ". $pessoa_adapter->getNome()."<br>";
echo "Idade: ". $pessoa_adapter->getIdade()."<br>";
echo "Sexo: ". $pessoa_adapter->getSexo()."<br>";