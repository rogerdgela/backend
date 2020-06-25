<?php $render('header'); ?>

Opa, <?= $nome; ?><br>
Tenho <?= $idade; ?> anos.
<hr>

<?php
    foreach ($posts as $post){
?>
        <h3><?= $post['titulo']; ?></h3>
        <p><?= $post['corpo'] ?></p>
        <br>
<?php
    }
?>