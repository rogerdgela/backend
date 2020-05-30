<?php
    $arquivo = "php-post.png";

    $largura = 200;
    $altura = 200;

    list($largura_original, $altura_original) = getimagesize($arquivo);

    $ratio = $largura_original/$altura_original;

    if($largura/$altura > $ratio){
        $largura = $altura * $ratio;
    }else{
        $altura = $largura / $ratio;
    }

    $imagem_final = imagecreatetruecolor($largura, $altura);

    $imagem_original = imagecreatefrompng($arquivo);

    imagecopyresampled($imagem_final, $imagem_original, 0,0,0,0,$largura,$altura,$largura_original,$altura_original);

    /*header("Content-Type: image/png");*/
    /*imagepng($imagem_final, null);*/
    imagepng($imagem_final, "imagem-redimensionada.png");

    echo "Imagem redimensionada com sucesso";

?>
