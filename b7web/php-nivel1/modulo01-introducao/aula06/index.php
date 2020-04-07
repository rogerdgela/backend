<?php
$lista = [
    'nome' => 'Bruno',
    'idade' => '24',
    'atributos' =>[
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "NOME: ".$lista['nome']."<br/>";
echo "IDADE: " .$lista['idade'] ."<br/>";
echo "ATRIBUTO FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "ATRIBUTO AGILIDADE: " .$lista['atributos']['agilidade'] ."<br/>";
echo "ATRIBUTO DESTREZA: " .$lista['atributos']['destreza'] ."<br/>";
echo "VIDA: ".$lista['vida'] ."<br/>";
echo "MANA: " . $lista['mana'] . "<br/>";