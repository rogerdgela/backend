<html>
    <head>
        <meta charset="UTF-8">
        <title>Crud em MVC</title>
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>assets/css/style.css">
        <script type="text/javascript" src="<?= BASE_URL ?>assets/js/script.js"></script>
    </head>
    <body>
        <header>
            <h1>Sistema de contatos</h1>
        </header>

        <section>
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </section>

        <footer>
            TODOS OS DIREITOS
        </footer>
    </body>
</html>
