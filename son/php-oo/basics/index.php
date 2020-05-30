<?php

$x = 10;

var_dump($x == 10);
var_dump($x == '10');

var_dump($x === '10');
var_dump($x === 10);

############################################

if(strpos("testing","test") !== false){
    echo "encontrou";
}