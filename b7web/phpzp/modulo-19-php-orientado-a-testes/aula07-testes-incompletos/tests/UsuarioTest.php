<?php
use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    public function testExpectNomeCompleto()
    {
        $this->expectOutputString('Rogerio Silva');

        $usuario = new Usuario();
        $usuario->setNome('Rogerio');
        $usuario->setSobreNome('Silva');

        echo $usuario->getNomeCompleto();
    }

    public function testIdade()
    {
        $usuario = new Usuario();
        $usuario->setIdade(90);

        $this->assertEquals(90, $usuario->getIdade());

        //$this->markTestIncomplete('Esperando a implemanetação da classe');
    }

    public function testIdadeString()
    {
        $usuario = new Usuario();
        $usuario->setIdade(90);

        $this->assertEquals('90 anos', $usuario->getIdade(true));
        //$this->markTestIncomplete('');
    }
}