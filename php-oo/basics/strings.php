<?php

$x = 'Olá fdp';
$x.= '\n';
$x.= 'foda-se';

$x = 'Olá fdp'
    .'\n'
    .'foda-se';

$y = 10;

echo 'Olá mundo! Meu numero é $y';
//echo "Olá Mundo! Meu numero é $y";

$z = 'Você';

echo "Olá mundo! {$z}s viram alguma coisa";

// nao quer parsear as variaveis, nowdoc
$var = <<<'EOD'
teste de nowdoc, a variavel $z não é parseada
EOD;

// heredoc
$var = <<<EOD
teste de nowdoc, a variavel $z não é parseada
EOD;
