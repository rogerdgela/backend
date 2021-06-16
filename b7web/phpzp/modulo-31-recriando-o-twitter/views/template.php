<html>
<head>
    <title>Twitter</title>
    <link rel="stylesheet" href="/assets/css/template.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src=../assets/js/script.js></script>
</head>
<body>
    <div class="topo">
        <div class="topoint">
            <div class="topoleft">TWITTER</div>
            <div class="toporight"><?= $viewData['nome'] ?> - <a href="/login/sair">Sair</a></div>
            <div style="clear: both"></div>
        </div>
    </div>

    <div class="container">
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </div>
</body>
</html>