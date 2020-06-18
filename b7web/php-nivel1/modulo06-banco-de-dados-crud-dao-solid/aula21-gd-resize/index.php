<?php
$arquivo = "skate.jpg";
$maxWidth = 200;
$maxHeight = 200;

/*var_dump($info);*/
list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDestino = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if($ratioDestino > $ratio){
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
}else{
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);
$original_img = imagecreatefromjpeg($arquivo);

imagecopyresampled($imagem,$original_img,0,0,0,0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);

/*header("Content-Type: image/jpeg");*/
imagejpeg($imagem,'skate_teste.jpg', 100);