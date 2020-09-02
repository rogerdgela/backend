<div class="container">
    <h1>Meus Anúncios</h1>

    <a href="<?= BASE_URL ?>anuncios/add" class="btn btn-default">Adicionar Anuncio</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Foto</th>
            <th>Título</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($anuncios as $anuncio){
            ?>
            <tr>
                <td>
                    <?php
                    if(empty($anuncio['url'])){
                        ?>
                        <img src="<?= BASE_URL ?>assets/images/sem-imagem.jpg" border="0" height="50">
                        <?php
                    }else{
                        ?>
                        <img src="<?= BASE_URL ?>assets/images/anuncios/<?= $anuncio['url']; ?>" border="0" height="50">
                        <?php
                    }
                    ?>
                </td>
                <td><?= $anuncio['titulo']; ?></td>
                <td>R$ <?= number_format($anuncio['valor'],2,',','.'); ?></td>
                <td>
                    <a href="<?= BASE_URL ?>anuncios/editar/<?= $anuncio['id']; ?>" class="btn btn-default">Editar</a>
                    <a href="<?= BASE_URL ?>anuncios/excluir/<?= $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>