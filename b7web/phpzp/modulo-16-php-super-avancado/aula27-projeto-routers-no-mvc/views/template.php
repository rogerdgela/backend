<html>
    <head>
        <title>Teste de template</title>
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/style.css">
        <script type="text/javascript" src="<?= BASE_URL; ?>/assets/js/script.js"></script>
    </head>
<body>
    <h1>Topo</h1>
    <a href="<?= BASE_URL; ?>">Home</a>
    <a href="<?= BASE_URL; ?>galeria">galeria</a>
    <hr>
    <?= $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>