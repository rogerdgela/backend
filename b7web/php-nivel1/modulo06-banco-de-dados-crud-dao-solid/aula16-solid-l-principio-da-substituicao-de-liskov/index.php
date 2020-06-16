<?php

class A
{
    public function getNome()
    {
        return "Esse é o A";
    }
}

class B extends A
{
    public function getNome()
    {
        return "Esse é o B";
    }
}

function imprimiNome(A $obj)
{
    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
echo imprimiNome($objeto1);
echo "<br>";
echo imprimiNome($objeto2);