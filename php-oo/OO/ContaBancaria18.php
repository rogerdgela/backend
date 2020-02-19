<?php

class ContaBancaria
{
    //public $saldo = 0;
    private $saldo = 0;
    private $taxa = 5;

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

$conta = new ContaBancaria(10);
$conta->depositar(60);
echo $conta->getSaldo();
echo $conta->getTaxa();
//echo $conta->saldo;

