<?php $render('header'); ?>

    <h2>Add usuário</h2>
    <form method="post" action="<?= $base;?>/novo">
        <label>
            Nome:<br>
            <input type="text" name="name">
        </label><br><br>

        <label>
            Email:<br>
            <input type="text" name="email">
        </label><br><br>

        <input type="submit" value="Adicionar">
    </form>

<?php $render('footer'); ?>