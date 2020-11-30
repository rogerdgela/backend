<?php
//declare(strict_types=1);

function saoIguais(float $n1, float $n2) : bool
{
    if ($n1 === $n2) {
        return true;
    }

    return false;
}

echo "são iguais: ".saoIguais(20,20);

/*class Carro
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}*/