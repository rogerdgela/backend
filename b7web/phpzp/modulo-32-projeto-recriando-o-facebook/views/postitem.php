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
        <button class="btn btn-primary" onclick="curtir(this)" data-id="<?= $id ?>" data-likes="<?= $likes ?>" data-liked="<?= $liked ?>"><?= $likes ?> <?= ($liked == 0) ? '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>' : '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>' ?></button>

        <button class="btn btn-primary" onclick="displayComentario(this)">0 <i class="fa fa-commenting-o" aria-hidden="true"></i></button>

        <div class="postitem_comentario">
            <input type="text" class="postitem_txt form-control">
            <button class="btn btn-primary btn-comentar" onclick="comentar(this)" data-id="<?= $id ?>">Comentar</button>
        </div>
    </div>

    <br>

    <?php if(count($comentarios) > 0) { ?>

        <?php foreach ($comentarios as $coments) { ?>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start postitem_comentarios">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?= $coments['nome'] ?> - <small><?= $coments['data_criacao'] ?></small></h5>

                    </div>
                    <p class="mb-1"><?= $coments['texto'] ?></p>
                </a>
            </div>
        <?php } ?>

    <?php } ?>
</div>
