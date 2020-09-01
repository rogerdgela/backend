<html>
    <head>
        <title>Classificados</title>
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/style.css">
    </head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?= BASE_URL; ?>" class="navbar-brand">Classificados</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])){ ?>
                    <li><a href="#"><?= ucwords($_SESSION['cNomeUsuario']); ?></a></li>
                    <li><a href="<?= BASE_URL; ?>anuncios">Meu Anúncios</a></li>
                    <li><a href="<?= BASE_URL; ?>login/sair">Sair</a></li>
                <?php }else{ ?>
                    <li><a href="<?= BASE_URL; ?>cadastro">Cadastre-se</a></li>
                    <li><a href="<?= BASE_URL; ?>login">Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <?= $this->loadViewInTemplate($viewName, $viewData); ?>

    <script type="text/javascript" src="<?= BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>