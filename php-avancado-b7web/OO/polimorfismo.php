<?php
class Animal{
    public function getNome(){
        echo "getNome da classe Animal";
    }

    public function teste(){
        echo "Testado";
    }
}

class Cachorro extends Animal {
    /*public function getNome(){
        echo "getNome da classe cachorro";
    }*/

    public function getNome(){
        $this->teste();
    }
}

$dog = new Cachorro();
$dog->getNome();
?>