<?php $render('header'); ?>

    <h2>Editar usuário</h2>
    <form method="post" action="<?= $base;?>/usuario/<?= $usuario['id']; ?>/editar">
        <label>
            Nome:<br>
            <input type="text" name="name" value="<?= $usuario['nome'] ?>">
        </label><br><br>

        <label>
            Email:<br>
            <input type="text" name="email" value="<?= $usuario['email'] ?>">
        </label><br><br>

        <input type="submit" value="Alterar">
    </form>

<?php $render('footer'); ?>