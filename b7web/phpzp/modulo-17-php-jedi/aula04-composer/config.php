<?php
require_once 'environment.php';

$config = [];

if(ENVIRONMENT == 'development'){
    define('BASE_URL', 'http://localhost/cursos/backend/b7web/phpzp/modulo-17-php-jedi/aula04-aula04-composer/');
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define('BASE_URL', 'http://meusite.com.br/');
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

/*global $db;
try {
    $db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'], $config['dbuser'], $config['dbpass']);
}catch (PDOException $e){
    echo "Erro: " . $e->getMessage();
    exit();
}*/