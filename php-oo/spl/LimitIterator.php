<?php

$fruits = new ArrayIterator(array(
   'Apple',
   'Banana',
   'cherry',
   'damson',
   'elderberry'
));

foreach (new LimitIterator($fruits, 3, 2) as $fruit){
    echo $fruit."<br>";
}

echo "<hr>";

foreach (new LimitIterator($fruits, 2) as $fruit){
    echo $fruit."<br>";
}