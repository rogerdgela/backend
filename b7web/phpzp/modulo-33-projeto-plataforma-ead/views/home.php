<h1>Seus Cursos</h1>
<?php foreach ($cursos as $curso) { ?>
    <a href="<?= BASE ?>cursos/entrar/<?= $curso['id_curso'] ?>">
        <div class="cursoitem">
            <img src="<?= BASE ?>assets/images/cursos/<?= $curso['imagem'] ?>" border="0" width="100%"><br><br>
            <strong><?= $curso['nome'] ?></strong><br><br>
            <?= $curso['descricao'] ?>
        </div>
    </a>
<?php } ?>
