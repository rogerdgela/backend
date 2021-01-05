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

    public function testDirExists()
    {
        // assertDirectoryExists

        $this->assertDirectoryExists('src');
    }

    public function testDirPermission1()
    {
        // assertDirectoryIsReadable

        $this->assertDirectoryIsReadable('src');
    }

    public function testDirPermission2()
    {
        // assertDirectoryIsWritable

        $this->assertDirectoryIsWritable('src');
    }

    public function testFileEquals()
    {
        // assertFileEquals

        $this->assertFileEquals('lista1.txt','lista2.txt');
    }

    public function testBoolean1()
    {
        // assertTrue

        $this->assertTrue(is_file('lista2.txt'));
    }

    public function testBoolean2()
    {
        // assertFalse

        $this->assertFalse(is_file('vendor'));
    }

    public function testNull()
    {
        // assertNull

        $idade = null;
        $this->assertNull($idade);
    }

    public function testVarType()
    {
        // assertInternalType

        $a = new Assertativa();
        $this->assertInternalType('array', $a->getArray());
    }
}