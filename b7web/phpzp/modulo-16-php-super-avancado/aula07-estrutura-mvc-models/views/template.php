<html>
    <head>
        <title>Teste de template</title>
    </head>
<body>
    <h1>Topo</h1>
    <a href="<?= BASE_URL; ?>">Home</a>
    <a href="<?= BASE_URL; ?>galeria">galeria</a>
    <hr>
    <?= $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>