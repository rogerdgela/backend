<?php
require_once 'classes.php';

$olheiro = new UsuarioObserver();

$usuario = new Usuario('Dgela');
$usuario->attach($olheiro);

echo "Meu nome é: ". $usuario->getName();
echo '<hr>';

$usuario->setName('Maria');

echo "Meu nome é: ". $usuario->getName();
echo '<hr>';

$usuario->detach($olheiro);

$usuario->setName('Di');

echo "Meu nome é: ". $usuario->getName();
echo '<hr>';