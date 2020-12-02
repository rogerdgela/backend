<?php
$config = new class {
    private $base = "http://localhost/";

    public function getBaseUrl()
    {
        return $this->base;
    }
};

/*$a = new class {
    private $carro;

    public function setCarro($carro)
    {
        $this->carro = $carro;
    }

    public function getName()
    {
        return $this->carro->getName();
    }
};

$a->setCarro(new class {
    public function getName()
    {
        return 'Carro 6.0';
    }
});

echo $a->getName();*/

/*class Automovel
{
    private $carro;
    public function setCarro($carro)
    {
        $this->carro = $carro;
    }

    public function getName()
    {
        return $this->carro->getName();
    }
}

$a = new Automovel();
$a->setCarro(new class {
    public function getName()
    {
        return 'Carro 5.0';
    }
});
echo $a->getName();*/

/*function criarCarro()
{
    return new class {
      public function getName()
      {
          return "Carro 3.0";
      }
    };
}

$carro = criarCarro();
echo $carro->getName();*/


/*$carro = new class {
  public function getName()
  {
      return 'Carro 2.0';
  }
};

echo $carro->getName();*/

/*class Carro
{
    public function getName()
    {
        return "Carro 1.0";
    }
}

$carro = new Carro();
echo $carro->getName();*/