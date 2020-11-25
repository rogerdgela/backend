<?php
require_once __DIR__.'/vendor/autoload.php';

$clienteinfo = new LojaDgela\Clientes\ClienteInfo;
$co = new LojaDgela\Clientes\ClientePedido;

$produtoinfo = new LojaDgela\Produtos\ProdutoInfo;

echo "Produto ".$produtoinfo->getProdutoName();

//echo "Meu nome é ".$clienteinfo->getName();

//print_r($co->getTodos());