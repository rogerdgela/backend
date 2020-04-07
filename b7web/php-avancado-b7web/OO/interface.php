<?php
interface Animal{
    public function andar();
}

class Cachorro implements Animal {
    public function andar()
    {
       echo "Andando";
    }
}

$dog = new Cachorro();
$dog->andar();