<?php


namespace Alura\Cursos\Controller;


abstract class ControllerComHtml
{
    public function rendererizaHtml(string $caminhotemplate, array $dados): string
    {
        extract($dados);
        ob_start();
        require __DIR__ . '/../../view/' . $caminhotemplate;
        $html = ob_get_clean();

        return $html;
    }
}