<?php

require_once 'Pessoa.php';

$rogerio = new Pessoa('Rogerio', '14/04/1984');
echo "Nome: " . $rogerio->getNome() . " Idade: " . $rogerio->getIdade();