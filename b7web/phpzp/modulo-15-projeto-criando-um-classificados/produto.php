<?php
    require_once 'pages/header.php';
    require_once ('classes/Anuncios.php');
    require_once ('classes/Usuarios.php');

    $a = new Anuncios();
    $u = new Usuarios();

    if(isset($_GET['id'])){
        $id = addslashes($_GET['id']);
    }else{
?>
        <script type="text/javascript">window.location.href="login.php";</script>
<?php
        exit();
    }

    $info = $a->getAnuncio($id);
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php foreach ($info['fotos'] as $chave => $foto){ ?>
                            <div class="item <?= ($chave == '0') ? 'active' : ''; ?>" style="width:100%;">
                                <img src="assets/images/anuncios/<?= $foto['url']; ?>" style="width: 100%">
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span><</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span>></span>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <h1><?= $info['titulo']; ?></h1>
                <h4><?= $info['categoria']; ?></h4>
                <p><?= $info['descricao']; ?></p>
                <br>
                <h3>R$ <?= number_format($info['valor'],2,',','.'); ?></h3>
                <h4>Telefone: <?= $info['telefone']; ?></h4>
            </div>
        </div>
    </div>

<?php require_once 'pages/footer.php'; ?>