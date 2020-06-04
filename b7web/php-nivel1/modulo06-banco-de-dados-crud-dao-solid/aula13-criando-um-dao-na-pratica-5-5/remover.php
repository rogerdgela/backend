<?php
require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if($id){
    $usuarioDao->delete($id);
}

header('Location: index.php');
exit();
?>