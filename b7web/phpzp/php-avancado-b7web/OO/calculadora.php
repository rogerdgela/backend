<?php
class Calculadora{
    private $n;

    public function __construct($numeroInicial){
        $this->n = $numeroInicial;
    }

    public function somar($n1){
        $this->n += $n1;
        return $this;
    }

    public function subtrair($n1){
        $this->n += $n1;
        return $this;
    }

    public function dividir($n1){
        $this->n += $n1;
        return $this;
    }

    public function multiplicar($n1){
        $this->n += $n1;
        return $this;
    }

    public function resultado(){
        return $this->n;
    }
}

$calc = new Calculadora(10);

$calc->dividir(10)->multiplicar(20)->somar(10)->subtrair(5);
echo "resultado: ".$calc->resultado();

/*class calculadora{

    public function somar($n1, $n2){
        return $n1+$n2;
    }

    public function dividir($n1, $n2){
        return $n1/$n2;
    }

    public function subtrair($n1, $n2){
        return $n1-$n2;
    }

    public function multiplicar($n1, $n2){
        return $n1+$n2;
    }
}

$calc = new calculadora();

echo "10+10 = ".$calc->somar(10,10)."<br>";
echo "10-10 = ".$calc->subtrair(10,10)."<br>";
echo "10*10 = ".$calc->multiplicar(10,10)."<br>";
echo "10/10 = ".$calc->dividir(10,10)."<br>";*/