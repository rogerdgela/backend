<?php

require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

?>

<a href="add_user.php">Add User</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($lista as $user){ ?>
        <tr>
            <td><?= $user->getId(); ?></td>
            <td><?= $user->getNome(); ?></td>
            <td><?= $user->getEmail(); ?></td>
            <td>
                <a href="editar.php?id=<?= $user->getId(); ?>">[ Editar ]</a>
                <a href="remover.php?id=<?= $user->getId(); ?>" onclick="return confirm('Deseja remover o registro?')">[ Excluir ]</a>
            </td>
        </tr>
    <?php } ?>
</table>
