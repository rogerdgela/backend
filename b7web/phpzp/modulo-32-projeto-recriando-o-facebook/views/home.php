<div class="row">
    <div class="col-sm-8">

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