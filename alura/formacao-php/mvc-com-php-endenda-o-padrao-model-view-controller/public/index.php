<?php

use Alura\Cursos\Controller\InterfaceControladorRequisicao;

require __DIR__ . '/../vendor/autoload.php';

$caminho = $_SERVER['PATH_INFO'];
$routes = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $routes)){
    http_response_code(404);
    exit();
}

session_start();

$rotaLogin = stripos($caminho, 'login');
if(!isset($_SESSION['logado']) && $rotaLogin === false){
    header("Location: /login");
    exit();
}

$classController = $routes[$caminho];
/**
 * @var InterfaceControladorRequisicao $controller
 */
$controller = new $classController();
$controller->processaRequisicao();