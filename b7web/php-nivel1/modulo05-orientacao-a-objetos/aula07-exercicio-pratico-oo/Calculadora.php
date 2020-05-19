<?php


class Calculadora
{
    private $num = 0;

    public function somar($numero)
    {
        $this->num += $numero;
    }

    public function subtrai($numero)
    {
        $this->num -= $numero;
    }

    public function multiply($numero)
    {
        $this->num *= $numero;
    }

    public function divide($numero)
    {
        $this->num /= $numero;
    }

    public function total()
    {
        return $this->num;
    }

    public function clear()
    {
        $this->num = null;
    }
}