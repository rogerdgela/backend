<?php

class Math
{
    public function soma($x,$y)
    {
        if(!is_numeric($x) or !is_numeric($y))
            throw new InvalidArgumentException("Numero invalidos");

        $resultado = $x+$y;

        if($resultado > 10)
            throw new OutOfRangeException("Resultado maior que 10",10);

        return $x + $y;
    }
}

$result = new Math();

try {
    //echo $result->soma(10, 'ola');
    echo $result->soma(30,30);
}catch (InvalidArgumentException $e){
    echo "Houve um erro: ".$e->getMessage();
}catch (OutOfRangeException $e){
    echo "Houve um erro: ".$e->getMessage()." - ".$e->getCode();
}
