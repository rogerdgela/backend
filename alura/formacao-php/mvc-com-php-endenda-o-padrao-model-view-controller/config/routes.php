<?php

use Alura\Cursos\Controller\{Exclusao, FormularioEdicao, FormularioInsercao, ListarCursos, Persistencia};

$routes = [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class
];

return $routes;