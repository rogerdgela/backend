<?php
/**
 * Created by PhpStorm.
 * User: Rogerio
 * Date: 25/10/2017
 * Time: 19:34
 */

interface ICarro21
{
    public function ligar();

    public function parar();

    public function trocaDeMarcha($marcha);
}

class Gol implements ICarro21
{

    public function ligar()
    {
        echo "Ligou";
    }

    public function parar()
    {
        echo "Parou";
    }

    public function trocaDeMarcha($marcha)
    {
        echo "trocou para {$marcha}";
    }
}