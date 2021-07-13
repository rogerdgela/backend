<h1><?= $info['titulo']; ?> (<?= $qty_membros ?> Membro<?= ($qty_membros == '1' ? '' : 's') ?>)</h1>

<?php if($is_membro) { ?>
    <div class="post_area">
        <h4>O que você está pensando?</h4>
        <form method="post" enctype="multipart/form-data">
            <textarea name="post" class="form-control"></textarea>
            <input type="file" name="foto"><br>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>

    <div class="feed">
        <?php
            foreach ($feed as $postitem) {
                $this->loadView('postitem', $postitem);
            }
        ?>
    </div>
<?php } else { ?>
    <h3>Voce não é membro deste grupo</h3>
    <a href="<?= BASE ?>grupos/entrar/<?= $info['id'] ?>" class="btn btn-primary">Entrar no Grupo</a>
<?php } ?>