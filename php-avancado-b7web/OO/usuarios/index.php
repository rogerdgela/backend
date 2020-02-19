<?php
require "Usuario.php";

$usuario = new Usuario(1);

echo "Nome: ".$usuario->getNome();
$usuario->setNome("teste");
$usuario->salvar();
echo "<br>Nome: ".$usuario->getNome();
$usuario->delete();
echo "usuario deletado";
/*$usuario->setNome("Dgela");
$usuario->setEmail("dgelask8@gmail.com");
$usuario->setSenha("123");
$usuario->salvar();

echo "usuario criado";*/