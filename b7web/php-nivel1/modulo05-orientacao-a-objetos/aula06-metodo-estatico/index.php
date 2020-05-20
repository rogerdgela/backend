<?php


class Matematica
{
    public static string $variavel = "20";

    public static function somar($n1,$n2)
    {
        return $n1 + $n2;
    }
}

echo Matematica::$variavel;
echo Matematica::somar(1,6);