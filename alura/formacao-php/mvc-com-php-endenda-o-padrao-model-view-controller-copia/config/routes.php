<?php

use Alura\Cursos\Controller\FormularioInsercao;

$routes = [
    '' => FormularioInsercao::class,
    '/novo-curso' => FormularioInsercao::class
];

return $routes;