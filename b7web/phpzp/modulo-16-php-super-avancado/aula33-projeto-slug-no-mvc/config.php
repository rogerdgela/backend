<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
    define('BASE_URL', 'http://localhost/cursos/backend/b7web/phpzp/modulo-16-php-super-avancado/aula33-projeto-slug-no-mvc/');
	$config['dbname'] = 'mvc_slug';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
    define('BASE_URL', 'http://localhost/cursos/backend/b7web/phpzp/modulo-16-php-super-avancado/aula33-projeto-slug-no-mvc/');
	$config['dbname'] = 'mvc_slug';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>