<?php


namespace Alura\Cursos\Helper;


trait FlashMessageTrait
{
    public function defineMenssagem(string $tipo, string $mensagem): void
    {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION['tipo_mensagem'] = $tipo;
    }
}