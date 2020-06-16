<?php

$senha = md5("rogerio");
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

if(password_verify($senha, $senha_criptografada)){
    echo "Senha correta";
}else{
    echo "Senha incorreta";
}

