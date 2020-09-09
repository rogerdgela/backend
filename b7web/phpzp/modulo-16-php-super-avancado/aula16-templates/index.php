<?php
require_once 'Template.php';

$dados = [
    'titulo' => 'Título da página',
    'nome' => 'Rogerio',
    'idade' => 36
];

$tpl = new Template('template.phtml');
$tpl->render($dados);