<?php
    require_once 'pages/header.php';
    require_once ('classes/Anuncios.php');
    require_once ('classes/Usuarios.php');
    require_once ('classes/Categorias.php');

    $a = new Anuncios();
    $u = new Usuarios();
    $c = new Categorias();

    $filtros = [
            'categoria'=>'',
            'preco' => '',
            'estado' => ''
        ];

    if(isset($_GET['filtros'])){
        $filtros = $_GET['filtros'];
    }

    $total_anuncios = $a->getTotalAnuncios($filtros);
    $total_usuarios = $u->getTotalUsuarios();

    $por_pagina = 2;

    $p = 1;
    if(isset($_GET['p'])){
        $p = $_GET['p'];
    }

    $total_paginas = ceil($total_anuncios / $por_pagina);

    $anuncios = $a->getUltimosAnuncios($p, $por_pagina, $filtros);

    $categorias = $c->getLista();
?>

    <div class="container-fluid">
         <div class="jumbotron">
             <h2>Possuímos cerca de <?= $total_anuncios; ?> anúncios.</h2>
             <p>E mais de <?= $total_usuarios ?> usuários cadastrados</p>
         </div>

        <div class="row">
            <div class="col-sm-3">
                <h4>Pesquisa Avançada</h4>

                <form method="get">
                    <div class="form-group">
                        <label id="categoria">Categoria</label>
                        <select name="filtros[categoria]" class="form-control">
                            <option></option>
                            <?php foreach ($categorias as $cat){ ?>
                                <option value="<?= $cat['id']; ?>" <?= ($cat['id'] == $filtros['categoria']) ? 'selected="selected"' : ''; ?>><?= $cat['nome']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label id="preco">Preços</label>
                        <select name="filtros[preco]" class="form-control">
                            <option></option>
                            <option value="0-50" <?= ($filtros['preco'] == '0-50') ? 'selected="selected"' : ''; ?>>R$ 0 - 50,00</option>
                            <option value="51-100" <?= ($filtros['preco'] == '51-100') ? 'selected="selected"' : ''; ?>>R$ 51,00 - 100,00</option>
                            <option value="101-200" <?= ($filtros['preco'] == '101-200') ? 'selected="selected"' : ''; ?>>R$ 101,00 - 200,00</option>
                            <option value="201-500" <?= ($filtros['preco'] == '201-500') ? 'selected="selected"' : ''; ?>>R$ 201,00 - 500,00</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label id="estado">Estado de Conservção</label>
                        <select name="filtros[estado]" class="form-control">
                            <option></option>
                            <option value="0" <?= ($filtros['estado'] == '0') ? 'selected="selected"' : ''; ?>>Ruim</option>
                            <option value="1" <?= ($filtros['estado'] == '1') ? 'selected="selected"' : ''; ?>>Bom</option>
                            <option value="2" <?= ($filtros['estado'] == '2') ? 'selected="selected"' : ''; ?>>Ótimo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Buscar">
                    </div>
                </form>
            </div>
            <div class="col-sm-9">
                <h4>Últimos Anúncios</h4>

                <table class="table table-striped">
                    <tbody>
                        <?php foreach ($anuncios as $anuncio){ ?>
                            <tr>
                                <td>
                                    <?php
                                        if(empty($anuncio['url'])){
                                            ?>
                                            <img src="assets/images/sem-imagem.jpg" border="0" height="50">
                                    <?php
                                        }else{
                                            ?>
                                            <img src="assets/images/anuncios/<?= $anuncio['url']; ?>" border="0" height="50">
                                    <?php
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="produto.php?id=<?= $anuncio['id']; ?>"><?= $anuncio['titulo']; ?></a>
                                </td>
                                <td><?= $anuncio['categoria']; ?></td>
                                <td>R$ <?= number_format($anuncio['valor'],2,',','.'); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <ul class="pagination">
                    <?php for ($q = 1; $q <= $total_paginas; $q++){ ?>
                        <li class="<?= ($p == $q) ? 'active' : ''; ?>"><a href="index.php?p=<?= $q; ?>"><?= $q; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

<?php require_once 'pages/footer.php'; ?>