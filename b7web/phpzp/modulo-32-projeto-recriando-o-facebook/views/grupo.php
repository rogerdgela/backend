<h1><?= $info['titulo']; ?> (<?= $qty_membros ?> Membro<?= ($qty_membros == '1' ? '' : 's') ?>)</h1>

<?php if($is_membro) { ?>
Você é membro.
<?php } else { ?>
    <h3>Voce não é membro deste grupo</h3>
    <a href="<?= BASE ?>grupos/entrar/<?= $info['id'] ?>" class="btn btn-primary">Entrar no Grupo</a>
<?php } ?>