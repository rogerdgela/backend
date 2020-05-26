<?php

require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use classes\Matematica\Adicao;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

$m = new Adicao();
echo $m->somar(20,9);

// add records to the log
$log->warning('Foo');
$log->error('Bar');