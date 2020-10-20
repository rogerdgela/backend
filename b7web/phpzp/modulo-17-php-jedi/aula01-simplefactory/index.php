<?php
require_once 'Facebook.php';

$fb = new Facebook();
$post = $fb->createPost();
$post->setAuthor("Rogerio");
$post->setMessage("Menssagem");

echo "Autor: ".$post->getAuthor();

echo "<hr>";

$post2 = $fb->createPost();
$post2->setAuthor("Dgela");
$post2->setMessage("Mensagem 2");

echo "Autor: ".$post2->getAuthor();