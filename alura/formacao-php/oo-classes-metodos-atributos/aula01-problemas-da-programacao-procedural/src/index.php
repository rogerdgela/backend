<?php
require 'src/conta.php';
$conta = criarConta('123.456.789-10', 'Vinicius Dias', 500);
var_dump($conta); // Observe que a conta foi criada corretamente
$conta['123.456.789-10']['saldo'] -= 700;
var_dump($conta); // Verifique que uma nova conta foi criada de forma incorreta