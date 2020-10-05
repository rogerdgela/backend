<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/cursos/backend/b7web/phpzp/modulo-16-php-super-avancado/aula30-projeto-popular-select-a-partir-de-outro/");
	$config['dbname'] = 'projeto_popularselect';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
    define("BASE_URL", "http://localhost/cursos/backend/b7web/phpzp/modulo-16-php-super-avancado/aula30-projeto-popular-select-a-partir-de-outro/");
	$config['dbname'] = 'projeto_popularselect';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";charset=utf8;host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>