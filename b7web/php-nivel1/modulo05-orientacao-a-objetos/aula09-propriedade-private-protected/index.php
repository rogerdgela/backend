<?php
require_once "Heranca.php";

$foto = new Foto(12,36);
$foto->setUrl('Text');

echo "Foto: #" . $foto->getId() . " Likes: " . $foto->getLikes() . " Url: ".$foto->getUrl();