<?php
$hash = password_hash('123456', PASSWORD_BCRYPT);

$senha = "123456";
if(password_verify($senha, $hash)){
    echo "Acertou";
}else{
    echo "Errou";
}