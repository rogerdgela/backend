<h2>Busca ....</h2>
<?php foreach ($resultado as $pessoa) { ?>
    <div class="sugestaoitem">
        <strong><?= $pessoa['nome'] ?></strong>
        <button class="btn btn-primary pull-right" onclick="addFriend('<?= $pessoa['id'] ?>',this)"> + </button>
    </div>
<?php } ?>