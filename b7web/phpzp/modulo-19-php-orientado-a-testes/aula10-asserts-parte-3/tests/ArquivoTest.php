<?php
use PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase
{
    public function testInclude()
    {
        /*$this->assertTrue(
            file_exists('config.php')
        );*/

        $this->assertFileExists('config.php');
    }

    /*
     * @expectedException PHPUnit\Framework\Error\Error
     */
    /*public function testFalhaNoInlude()
    {
        include 'config.php';
    }*/
}