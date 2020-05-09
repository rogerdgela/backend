<?php

$lista = ['teste1', 'teste2','teste3'];

echo "Total: ".count($lista);

$lista2 = ['Rogerio','Maria','Di'];
$aprovados = ['Rogerio'];

$reprovados = array_diff($lista2, $aprovados);

//var_dump($reprovados);

$numeros = [10,20,24,69,87];
$filtrados = array_filter($numeros,function ($item){
    if($item > 30){
        return true;
    }else{
        return false;
    }
});

//var_dump($filtrados);

$numero = [10,65,97,42,45];

$dobrados = array_map(function ($item){
    return $item * 2;
},$numero);

var_dump($dobrados);