<?php $render('header'); ?>

<a href="<?= $base; ?>/novo">Add usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php
        foreach ($usuarios as $usuario){
    ?>
            <tr>
                <td><?= $usuario['id']; ?></td>
                <td><?= $usuario['nome']; ?></td>
                <td><?= $usuario['email']; ?></td>
                <td>
                    <a href="<?= $base ?>/usuario/<?= $usuario['id']; ?>/editar">[ editar ]</a>
                    <a href="<?= $base ?>/usuario/<?= $usuario['id']; ?>/excluir" onclick="return confirm('Deseja realmente excluir?')">[ excluir ]</a>
                </td>
            </tr>
    <?php
        }
    ?>

</table>

<?php $render('footer'); ?>