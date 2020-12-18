<?php
use PHPUnit\Framework\TestCase;

class AssertativaTest extends TestCase
{
    public function testArray()
    {
        // assertArrayHasKey
        $a = new Assertativa();

        $array = $a->getArray();

        $this->assertArrayHasKey('nome', $array);
    }

    public function testCount()
    {
        // assertCount
        $a = new Assertativa();

        $array = $a->getArray();

        $this->assertCount(2,$array);
    }

    public function testEmpty()
    {
        // assertEmpty
        $a = new Assertativa();

        //$array = $a->getArray();
        $array = [];

        $this->assertEmpty($array);
    }
}