<html>
    <head>
        <title>Projeto Ajax no MVC</title>
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/style.css">
    </head>
<body>
    <?= $this->loadViewInTemplate($viewName, $viewData); ?>

    <script type="text/javascript" src="<?= BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>