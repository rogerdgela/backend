<div class="container">
    <h1>Meus Anúncios - Editar Anúncio</h1>
    <?php
    if(!empty($sucesso)){
        echo $sucesso;
    }
    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
                <?php
                    foreach ($cats as $cat){
                        ?>
                        <option value="<?= $cat['id'] ?>" <?= ($info['id_categoria'] == $cat['id']) ? 'selected="selected"' : '' ?>><?= $cat['nome'] ?></option>
                        <?php
                    }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?= $info['titulo'] ?>">
        </div>

        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" class="form-control" value="<?= $info['valor'] ?>">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao"><?= $info['descricao'] ?></textarea>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="0" <?= ($info['estado'] == 0) ? 'selected="selected"' : '' ?>>Ruim</option>
                <option value="1" <?= ($info['estado'] == 1) ? 'selected="selected"' : '' ?>>Bom</option>
                <option value="2" <?= ($info['estado'] == 2) ? 'selected="selected"' : '' ?>>Ótimo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="add_foto">Fotos do Anuncio</label>
            <input type="file" name="fotos[]" multiple>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Fotos do Anúncio
                </div>
                <div class="panel-body">
                    <?php foreach ($info['fotos'] as $foto){ ?>
                        <div class="foto_item">
                            <img src="<?= BASE_URL; ?>assets/images/anuncios/<?= $foto['url']; ?>" border="0" class="img-thumbnail img-rounded">
                            <br>
                            <a href="<?= BASE_URL; ?>anuncios/deletefoto/<?= $foto['id']; ?>/<?= $info['id']; ?>" class="btn btn-danger">Excluir Foto</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <input type="submit" value="Salvar" class="btn btn-default">
    </form>
</div>