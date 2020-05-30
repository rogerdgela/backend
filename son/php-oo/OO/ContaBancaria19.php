<?php

class ContaBancaria
{
    //public $saldo = 0;
    private $saldo = 0;
    //private $taxa = 5;
    protected $taxa = 5;

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function __construct($valorInicial)
    {
        $this->depositar($valorInicial);
        $this->saldo -= $this->taxa;
        $this->sortear();
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getTaxa()
    {
        return $this->taxa;
    }

    private function sortear()
    {
        $this->saldo += 5;
    }
}

class Itau extends ContaBancaria
{
    public function __construct($valorInicial)
    {
        $this->taxa = 1;
        parent::__construct($valorInicial);
    }
}

$conta = new Itau(20);
echo $conta->getTaxa();
echo "<br>";
echo $conta->getSaldo();

