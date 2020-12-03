<?php

$a = 50;
$b = 70;

$result = $a <=> $b;

var_dump($result);

/*
 * $result == 0 quando o valores forem iguais
 * $result == -1 $a menor que $b
 * $result == 1 $a maior que $b
 */