<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

	$app->get('/sobre', function (Request $request, Response $response, array $args) use ($container) {
		echo '...';
	});

    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });
};
