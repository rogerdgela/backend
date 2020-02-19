<?php

$input = array(1, 2, 3, 4, 5, 6);

$filtro = function ($item){
    return ($item % 2) == 0;
};

$output = array_filter($input, $filtro);

print_r($output);

$output = array_filter($input, function ($item){
    return ($item % 2) == 0;
});