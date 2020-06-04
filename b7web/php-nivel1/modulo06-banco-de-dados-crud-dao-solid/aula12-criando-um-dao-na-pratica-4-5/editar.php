<?php
require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$usuario = false;

if($id){
    $usuario = $usuarioDao->findById($id);
}

if($usuario === false){
    header('Location: index.php');
    exit();
}
?>

<form method="post" action="update_action.php">
    <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">
    <label>Nome</label><br>
    <input type="text" name="name" value="<?= $usuario->getNome(); ?>">

    <br>
    <br>

    <label>E-mail</label><br>
    <input type="email" name="email" value="<?= $usuario->getEmail(); ?>">

    <br>
    <br>

    <input type="submit" value="Salvar">
</form>

