<?php

$x = 10;

if($x == 10){
    echo "Deu certo!";
}else{
    echo "Não deu certo";
}

echo ($x == 10) ? 'deu certo' : 'não deu certo';

echo ($x) ? ($x == 10) ? 'ok' : 'nope' : (10==10) ? 'sim' : 'nao';

return ($x == 10) ? 'ok' : 'nope';