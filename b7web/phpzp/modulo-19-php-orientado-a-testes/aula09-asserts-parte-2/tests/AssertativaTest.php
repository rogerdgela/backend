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

    public function testContain()
    {
        // assertContains
        $array = [1,3,8,9,'rogerio'];

        $this->assertContains(8, $array);
    }

    public function testContainOnly()
    {
        // assertContainsOnly
        $array = [1,3,8,9];

        $this->assertContainsOnly('int', $array);
    }

    public function testAttributeExists()
    {
        // assertClassHasAttribute

        $this->assertClassHasAttribute('numero', Assertativa::class);
    }

    public function testRegex()
    {
        // assertMatchesRegularExpression

        $this->assertMatchesRegularExpression('/^[a-z]{3}$/', 'ola');
    }
}