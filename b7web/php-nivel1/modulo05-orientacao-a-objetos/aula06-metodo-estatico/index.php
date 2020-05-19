<?php


class Matematica
{
    public static string $variavel;

    public static function somar($n1,$n2)
    {
        return $n1 + $n2;
    }
}

echo Matematica::somar(1,6);