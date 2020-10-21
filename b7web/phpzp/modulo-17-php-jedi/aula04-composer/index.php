<?php
session_start();

require_once 'vendor/autoload.php';
require_once 'config.php';

spl_autoload_register(function ($class){
    if(file_exists('controllers/'.$class.'.php')){
        require_once 'controllers/'.$class.'.php';
    }else if(file_exists('models/'.$class.'.php')){
        require_once 'models/'.$class.'.php';
    }else if(file_exists('core/'.$class.'.php')){
        require_once 'core/'.$class.'.php';
    }
});

$log = new Monolog\Logger('teste_log');
$log->pushHandler(new Monolog\Handler\StreamHandler('erros.log', Monolog\Logger::WARNING));
$log->addError('Teste de erro');

$core = new Core();
$core->run();