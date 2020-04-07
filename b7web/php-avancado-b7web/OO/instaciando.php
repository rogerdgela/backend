<?php


class instaciando
{
    public function latir(){
        echo "AU AU";
    }
}

$toby = new instaciando(); //Instacia
$toby->latir();

$maylow = new instaciando();
$maylow->latir();

instaciando::latir();