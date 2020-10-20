<?php
interface APIDesenho
{
    public function desenharCirculo($x,$y,$radius);
}

class APIDesenho1 implements APIDesenho
{
    public function desenharCirculo($x,$y,$radius)
    {
        echo "Desenhando circulo, v1 ".$x." - ".$y." - ".$radius;
    }
}

class APIDesenho2 implements APIDesenho
{
    public function desenharCirculo($x,$y,$radius)
    {
        echo "Desenhando circulo, v2 ".$x." - ".$y." - ".$radius;
    }
}

class APIDesenhoAmericano implements APIDesenho
{
    public function desenharCirculo($x,$y,$radius)
    {
        echo "Desenhando circulo americano, v2 ".$x." - ".$y." - ".$radius;
    }
}

abstract class Forma
{
    protected $api;
    protected $x;
    protected $y;

    public function __construct(APIDesenho $api)
    {
        $this->api = $api;
    }
}

class Circulo extends Forma
{
   protected $radius;

   public function __construct($x, $y, $radius, APIDesenho $api)
   {
       parent::__construct($api);
       $this->x = $x;
       $this->y = $y;
       $this->radius = $radius;
   }

   public function desenhar()
   {
       $this->api->desenharCirculo($this->x, $this->y, $this->radius);
   }
}

$circulo = new Circulo(1,8,9, new APIDesenhoAmericano());
$circulo->desenhar();
