<?php

$senha = "rogerio";
$senha_criptografada = md5($senha);

if($senha == $senha_criptografada){
    echo "Senha correta";
}else{
    echo "Senha incorreta";
}

