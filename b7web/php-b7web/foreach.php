<?php
/*$dados = array(
    "Roger",
    "Dgela",
    "Jaqueline"
);*/
/*$nomes = array(
    array("nome"=>"teste", "idade"=>20),
    array("nome"=>"teste2", "idade"=>20),
    array("nome"=>"teste3", "idade"=>28)
);*/

$aluno = array(
    "nome"=>"Dgela",
    "idade"=>35,
    "Profissão"=>"programador"
);
foreach ($aluno as $chave => $dado){
    echo $chave." = ".$dado."<br>";
}
?>