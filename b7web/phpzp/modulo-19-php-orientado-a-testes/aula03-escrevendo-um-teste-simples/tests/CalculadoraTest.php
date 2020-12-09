<?php
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function testSomar()
    {
        $calc = new Calculadora();

        $this->assertEquals(2, $calc->somar(1,1));
    }

    public function testSomar2()
    {
        $calc = new Calculadora();

        $this->assertEquals(-5, $calc->somar(-10,5));
    }

    public function testSomar3()
    {
        $calc = new Calculadora();

        $this->assertEquals(2, $calc->somar(5,1));
    }
}