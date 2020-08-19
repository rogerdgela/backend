<?php
    require_once 'pages/header.php';
    if(empty($_SESSION['cLogin'])){
?>
        <script type="text/javascript">window.location.href="login.php";</script>
<?php
        exit();
    }
?>

    <div class="container">
        <h1>Meus Anúncios</h1>

        <a href="add-anuncio.php" class="btn btn-default">Adicionar Anuncio</a>

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
            require_once ('classes/Anuncios.php');

            $a = new Anuncios();
            $anuncios = $a->getMeusAnuncios();
            foreach ($anuncios as $anuncio){
            ?>
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
                <td><?= $anuncio['titulo']; ?></td>
                <td>R$ <?= number_format($anuncio['valor'],2,',','.'); ?></td>
                <td>
                    <a href="editar-anuncio.php?id=<?= $anuncio['id']; ?>" class="btn btn-default">Editar</a>
                    <a href="excluir-anuncio.php?id=<?= $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>

<?php require_once 'pages/footer.php'; ?>