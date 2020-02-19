<?php

class Math
{
    public function soma($x,$y)
    {
        if(!is_numeric($x) or !is_numeric($y))
            throw new Exception("Numero invalidos");

        return $x + $y;
    }
}

$result = new Math();

try {
    echo $result->soma(10, 'ola');
}catch (Exception $e){
    echo "House um erro: ".$e->getMessage();
}
