<?php

require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

/*require_once 'autoloader.php';

use Matematica\Adicao;

$m = new Adicao();
echo $m->somar(20,9);*/
