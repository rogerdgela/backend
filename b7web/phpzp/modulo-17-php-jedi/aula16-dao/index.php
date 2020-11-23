<?php
require_once 'classes.php';

$usuarioDao = new UsuarioDao();

$novoUsuario = new Usuario([
    'name' => 'Teste',
    'email' => 'dge@gmail.com',
    'pass' => md5('123'),
]);

$usuarioDao->insert($novoUsuario);

$usuarios = $usuarioDao->get();

foreach ($usuarios as $usuario){
    echo "Nome: ". $usuario->getName()." - Email: ".$usuario->getEmail()."<hr>";
}


/*$usuario = new Usuario([
    'name' => 'Teste de rogerio',
    'email' => 'dgeka@gmail.com',
    'pass' => md5('123'),
    'id' => '1'
]);*/
