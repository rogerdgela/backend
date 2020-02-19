<?php
include "usuarios.php";

$users = new Usuarios();
$users->deletar(1);

//$users->atualizar("ola alterado", "teste@gmail.com","123","4");

//$users->inserir("olá","ola@ola.com","123");

//$res = $users->getUserId(1);

