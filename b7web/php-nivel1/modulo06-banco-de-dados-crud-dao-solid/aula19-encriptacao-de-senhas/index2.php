<?php

$senha = "rogerio";
$senha_criptografada = md5($senha);

if(md5($senha) == $senha_criptografada){
    echo "Senha correta";
}else{
    echo "Senha incorreta";
}

