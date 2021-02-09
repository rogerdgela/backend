<?php

class Luz
{
    private $status;

    public function ligar()
    {
        $this->status = 'on';
    }

    public function deligar()
    {
        $this->status = 'off';
    }

    public function getStatus()
    {
        return $this->status;
    }
}

class  LuzOnCommand
{
    private $luz;

    public function __construct(Luz $luz)
    {
        $this->luz = $luz;
    }

    public function execute()
    {
        $this->luz->ligar();
    }
}

class  LuzOffCommand
{
    private $luz;

    public function __construct(Luz $luz)
    {
        $this->luz = $luz;
    }

    public function execute()
    {
        $this->luz->deligar();
    }
}

function callCommand($c)
{
    $c->execute();
}