<?php

$imagem = imagecreatetruecolor(300,300);

$cor = imagecolorallocate($imagem, 255,150,50);

imagefill($imagem,0,0,$cor);

/*header("Content-Type: image/jpeg");
imagejpeg($imagem,null,99);*/
imagepng($imagem,'teste_imagem.png');
/*imagejpeg($imagem,'teste_imagem.jpg',100);*/