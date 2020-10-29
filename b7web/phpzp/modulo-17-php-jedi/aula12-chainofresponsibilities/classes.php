<?php

class Carga
{
    private $peso;

    public function __construct($p)
    {
        $this->peso = $p;
    }

    public function getPeso()
    {
        return $this->peso;
    }
}

class Moto
{
    private $sucessor;

    public function setSucessor($s)
    {
        $this->sucessor = $s;
    }

    public function transport(Carga $carga)
    {
        if($carga->getPeso() <= 500){
            echo "Levou de Moto";
        }else{
            $this->sucessor->transport($carga);
        }
    }
}

class Carro
{
    private $sucessor;

    public function setSucessor($s)
    {
        $this->sucessor = $s;
    }

    public function transport(Carga $carga)
    {
        if($carga->getPeso() <= 5000){
            echo "Levou de Carro";
        }else{
            $this->sucessor->transport($carga);
        }
    }
}

class Caminhao
{
    private $sucessor;

    public function setSucessor($s)
    {
        $this->sucessor = $s;
    }

    public function transport(Carga $carga)
    {
        if($carga->getPeso() <= 30000){
            echo "Levou de Caminhão";
        }else{
            echo "Não foi possivel enviar a carga";
        }
    }
}