<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Facebook</title>
	    <link href="<?php echo BASE; ?>assets/css/bootstrap.min.css" rel="stylesheet">
	    <link href="<?php echo BASE; ?>assets/css/template.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/0e639a759a.js"></script>
        <script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
	    <script type="text/javascript" src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
    </head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="<?php echo BASE; ?>">Rede Social</a></li>
                        <li>
                            <form method="get" action="<?= BASE ?>busca" class="navbar-form navbar-left navbar-input-group">
                                <div class="form-group">
                                    <input class="form-control" name="q" type="text" placeholder="O procura?" aria-label="Search">
                                </div>

                                <button class="btn btn-primary" type="submit">Buscar</button>
                            </form>
                        </li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <?= $viewData['usuario_nome'] ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= BASE ?>perfil">Editar Perfil</a></li>
                                <li><a href="<?= BASE ?>login/sair">Sair</a></li>
                            </ul>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
	        <?php
	            $this->loadViewInTemplate($viewName, $viewData);
	        ?>
	    </div>
    </body>
</html>
