<?php
spl_autoload_register(function ($class){
    $base_dir = __DIR__.'/pacotes/';

    $file = $base_dir.str_replace('\\','/',$class).'.php';

    if(file_exists($file)){
        require_once $file;
    }
});

$clienteinfo = new LojaDgela\Clientes\ClienteInfo;
$co = new LojaDgela\Clientes\ClientePedido;

$produtoinfo = new LojaDgela\Produtos\ProdutoInfo;

echo "Produto ".$produtoinfo->getProdutoName();

//echo "Meu nome é ".$clienteinfo->getName();

//print_r($co->getTodos());