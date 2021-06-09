<?php require __DIR__ . '/../inicio-html.php' ?>

    <a href="/index.php/novo-curso" class="btn btn-primary mb-2">
        Novo Curso
    </a>

    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item d-flex justify-content-between">
                <?= $curso->getDescricao(); ?>

                <span>
                    <a href="/index.php/alterar-curso?id=<?= $curso->getId(); ?>" class="btn btn-info btn-sm">Editar</a>
                    <a href="/index.php/excluir-curso?id=<?= $curso->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>

<?php require __DIR__ . '/../fim-html.php' ?>