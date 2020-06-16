<?php

interface Aves
{
    public function setLocation($lat, $lng);

    public function setRender();
}

interface AvesQueVoam extends Aves
{
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam
{

    public function setLocation($lat, $lng)
    {
        // TODO: Implement setLocation() method.
    }

    public function setRender()
    {
        // TODO: Implement setRender() method.
    }

    public function setAltitude($alt)
    {
        // TODO: Implement setAltitude() method.
    }
}

class Pinguim implements Aves
{


    public function setLocation($lat, $lng)
    {
        // TODO: Implement setLocation() method.
    }

    public function setRender()
    {
        // TODO: Implement setRender() method.
    }
}
