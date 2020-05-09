<?php

$dizimo = function(int $valor){
            return $valor*(10/100);
          };

$funcao = $dizimo;

echo $funcao(100);


algumafuncao(10, function(){
    echo "sadsad";
});