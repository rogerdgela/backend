<?php

$array = [
    'Apple',
    'Microsoft',
    'HP'
];

$iterator = new ArrayIterator($array);

echo $iterator->current();
$iterator->next();
echo $iterator->current();
echo $iterator->count();

/*if (is_array($iterator) or $iterator instanceof Traversable){

}*/
echo "<br>";
echo $iterator->serialize();
//echo $iterator->unserialize();