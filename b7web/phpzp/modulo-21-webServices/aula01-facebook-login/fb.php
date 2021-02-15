<?php
session_start();
require_once "Facebook/autoload.php";

$fb = new Facebook\Facebook([
    'app_id' => '424364071984452',
    'app_secret' => '34a86f5c19eae5cadd5daf5b2112983a',
    'default_grafp_version' => 'v2.7'
]);