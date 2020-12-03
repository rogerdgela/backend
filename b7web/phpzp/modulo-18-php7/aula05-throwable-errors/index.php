<?php
try {
    teste();
} catch (Throwable $e) {
    $msg = "Erro no arquivo: ".$e->getFile().PHP_EOL.
           "Na linha: ".$e->getLine().PHP_EOL.
           "Erro: ".$e->getMessage();
    file_put_contents('erro.txt', $msg);
}

if (!empty($msg)) {
    echo "Deu erro<br>";
}

echo "Progresso";