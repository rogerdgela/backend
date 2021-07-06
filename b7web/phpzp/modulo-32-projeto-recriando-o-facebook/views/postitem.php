<div class="postitem">
    <?php
        if($tipo === 'foto') {
    ?>
            <img src="<?= BASE ?>assets/images/posts/<?= $url ?>" border="0" width="100%">
    <?php
        }
    ?>
    <div class="postitem_texto">
        <?= $texto; ?>
    </div>

    <div class="postitem_info">
        <strong>Postado por</strong> <?= $nome ?>
    </div>

    <div class="postitem_botoes">
        <button class="btn btn-primary"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
        <button class="btn btn-primary"><i class="fa fa-commenting-o" aria-hidden="true"></i>
        </button>
    </div>
</div>
