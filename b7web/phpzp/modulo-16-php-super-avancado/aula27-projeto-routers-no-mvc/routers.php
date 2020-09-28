<?php

global $routes;

$routes = [];

$routes['/galeria/{id}/{titulo}'] = '/galeria/abrir/:id/:titulo';
$routes['/news/{titulo}'] = '/noticia/abrir/:titulo';
$routes['/home/index'] = '/home/index';
$routes['/{titulo}'] = '/noticia/abrirtitulo/:titulo';