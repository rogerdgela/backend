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
                <td><img src="assets/images/anuncios/<?= $anuncio['url']; ?>" border="0"></td>
                <td><?= $anuncio['titulo']; ?></td>
                <td>R$ <?= number_format($anuncio['valor'],2,',','.'); ?></td>
                <td></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>

<?php require_once 'pages/footer.php'; ?>