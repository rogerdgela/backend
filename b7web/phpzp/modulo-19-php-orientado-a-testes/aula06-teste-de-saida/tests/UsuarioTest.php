<?php
use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    public function testExpectNomeCompleto()
    {
        $this->expectOutputString('Rogerio Silva');

        $usuario = new Usuario();
        $usuario->setNome('Rogerio');
        $usuario->setSobreNome('Silva a');

        echo $usuario->getNomeCompleto();
    }

}