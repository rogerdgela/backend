<?php
global  $routes;

$routes = [];

$routes['/teste/'] = '/home/testando';
$routes['/usuarios/{id}'] = '/home/visualizar_usuario/:id';
$routes['/home/index'] = '/home/index';
$routes['/{titulo}'] = '/noticia/abrirtitulo/:titulo';