<?php
require_once 'config.php';

$sql = $pdo->query("SELECT * FROM usuarios");
$lista = [];
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
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
            <td><?= $user['id']; ?></td>
            <td><?= $user['nome']; ?></td>
            <td><?= $user['email']; ?></td>
            <td>
                <a href="editar.php?id=<?= $user['id']; ?>">[ Editar ]</a>
                <a href="remover.php?id=<?= $user['id']; ?>">[ Excluir ]</a>
            </td>
        </tr>
    <?php } ?>
</table>
