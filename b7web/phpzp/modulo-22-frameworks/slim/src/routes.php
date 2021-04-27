<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {
        $lista = new Lista($this->db);

        $args['lista'] = $lista->getLista();
        return $container->get('renderer')->render($response, 'home.phtml', $args);
    });

    $app->get('/add', function (Request $request, Response $response, array $args) use ($container) {
        return $container->get('renderer')->render($response, 'add.phtml', $args);
    });

    $app->post('/add', function (Request $request, Response $response, array $args) use ($container){
        $data = $request->getParsedBody();

        $lista = new Lista($this->db);
        $lista->add($data);

        return $response->withStatus(302)->withHeader('Location','./');
    });

    /*$app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });*/
};
