<?php
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    /**
     * @dataProvider somarDataProvider
     */

    public function testSomar($n1, $n2, $esperado)
    {
        $calc = new Calculadora();

        $this->assertEquals($esperado, $calc->somar($n1,$n2));
    }

    public function somarDataProvider()
    {
        return [
          [1,3,4],
          [2,9,10],
          [10,10,21]
        ];
    }
}