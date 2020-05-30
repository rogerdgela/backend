<?php


class instanciando
{
    public function latir(){
        echo "AU AU";
    }
}

$toby = new instanciando(); //Instacia
$toby->latir();

$maylow = new instanciando();
$maylow->latir();

instanciando::latir();