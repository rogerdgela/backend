<?php
session_start();

header('Access-Control-Allow-Origin: *');
header('Access-control-Allow-Methods: *');

require 'config.php';
require 'vendor/autoload.php';

$core = new \Core\Core();
$core->run();