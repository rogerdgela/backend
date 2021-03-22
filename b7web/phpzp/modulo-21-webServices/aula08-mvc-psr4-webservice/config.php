<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://b7web.backend/phpzp/modulo-21-webServices/aula08-mvc-psr4-webservice/");
	$config['dbname'] = 'mvc_psr4';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://b7web.backend/phpzp/modulo-21-webServices/aula08-mvc-psr4-webservice/");
	$config['dbname'] = 'mvc_psr4';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}