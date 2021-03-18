<?php
require_once 'Jwt.php';

$jwt = new Jwt();

$token = $jwt->create([
    'id_user' => 123,
    'nome' => 'Rogerio Silva'
]);

echo "TOKEN: ".$token;