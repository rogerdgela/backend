<?php

$db_name = 'teste';
$db_user = 'root';
$db_senha = '';
$db_host = '';

$pdo = new PDO('mysql:dbname=' . $db_name . ';host=' . $db_host ,$db_user,$db_senha);
