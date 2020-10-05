<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Projeto: Popular select a partir de outro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/style.css" type="text/css" />
	</head>
	<body>
		<?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
		<script type="text/javascript">var BASE_URL = '<?= BASE_URL; ?>';</script>
		<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>