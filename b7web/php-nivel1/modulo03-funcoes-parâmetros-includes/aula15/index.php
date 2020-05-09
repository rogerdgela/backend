<?php

function diaSemana($data){
    $semana = ['Domingo','Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado'];

    $diaSemanaN = date('w',strtotime($data));

    return $semana[$diaSemanaN];
}

echo diaSemana("1984-04-14");