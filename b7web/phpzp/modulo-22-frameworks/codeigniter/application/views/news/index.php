<h2><?= $title ?></h2>

<?php foreach ($news as $news_item){ ?>
	<h3><?= $news_item['title'] ?></h3>
	<a href="<?= site_url('news/'.$news_item['url']) ?>">Ver Noticias</a>
<?php } ?>
