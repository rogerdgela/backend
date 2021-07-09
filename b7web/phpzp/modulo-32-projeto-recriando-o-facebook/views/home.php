<div class="row">
    <div class="col-sm-8">
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

    </div>

    <div class="col-sm-4">
        <?php if(count($requisicoes) > 0) { ?>
            <div class="widget">
                <h4>Requisições de amizade</h4>
                <?php foreach ($requisicoes as $pessoa) { ?>
                    <div class="requisicaoitem">
                        <strong><?= $pessoa['nome'] ?></strong>
                        <button class="btn btn-primary pull-right" onclick="aceitarFriend('<?= $pessoa['id'] ?>',this)"> + </button>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <div class="widget">
            <h4>Total de amigos</h4>
            <?= $totalamigos ?> amigo<?= ($totalamigos == '1') ? '' : 's' ?>
        </div>

        <?php if(count($sugestoes) > 0) { ?>
            <div class="widget">
                <h4>Sugestões de amigos</h4>
                <?php foreach ($sugestoes as $pessoa) { ?>
                    <div class="sugestaoitem">
                        <strong><?= $pessoa['nome'] ?></strong>
                        <button class="btn btn-primary pull-right" onclick="addFriend('<?= $pessoa['id'] ?>',this)"> + </button>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>