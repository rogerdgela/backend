<?php

use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;

require __DIR__ . '/../vendor/autoload.php';

$caminho = $_SERVER['PATH_INFO'];
$routes = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $routes)){
    http_response_code(404);
    exit();
}

session_start();

/*$rotaLogin = stripos($caminho, 'login');
if(!isset($_SESSION['logado']) && $rotaLogin === false){
    header("Location: /login");
    exit();
}*/

$psr17Factory = new Psr17Factory();

$creator = new ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);

$request = $creator->fromGlobals();

$classController = $routes[$caminho];
/**
 * @var InterfaceControladorRequisicao $controller
 */
$controller = new $classController();
$resposta = $controller->processaRequisicao($request);

foreach ($resposta->getHeaders() as $name => $values) {
    foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), false);
    }
}

echo $resposta->getBody();