<?php
spl_autoload_register(function ($class){
    $file = 'classes/'.$class.'.php';

    if (file_exists($file)) {
        require $file;
    }
});

$pessoa = new Rogerio();

echo $pessoa->getNome();