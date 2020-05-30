<?php

abstract class Banco
{
    //public $saldo = 0;
    protected $saldo = 0;
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

    abstract function saque($valor);
}

class Itau extends Banco
{
    public function saque($valor)
    {
        $this->saldo -= $valor;
    }
}

$conta = new Itau(20);

