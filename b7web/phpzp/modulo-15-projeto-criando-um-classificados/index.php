<?php
    require_once 'pages/header.php';
    require_once ('classes/Anuncios.php');
    require_once ('classes/Usuarios.php');

    $a = new Anuncios();
    $u = new Usuarios();

    $total_anuncios = $a->getTotalAnuncios();
    $total_usuarios = $u->getTotalUsuarios();

    $por_pagina = 2;

    $p = 1;
    if(isset($_GET['p'])){
        $p = $_GET['p'];
    }

    $total_paginas = ceil($total_anuncios / $por_pagina);

    $anuncios = $a->getUltimosAnuncios($p, $por_pagina);
    //var_dump($anuncios);
?>

    <div class="container-fluid">
         <div class="jumbotron">
             <h2>Possuímos cerca de <?= $total_anuncios; ?> anúncios.</h2>
             <p>E mais de <?= $total_usuarios ?> usuários cadastrados</p>
         </div>

        <div class="row">
            <div class="col-sm-3">
                <h4>Pesquisa Avançada</h4>
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