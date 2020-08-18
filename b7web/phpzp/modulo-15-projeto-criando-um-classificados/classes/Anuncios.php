<?php


class Anuncios
{
    public function getMeusAnuncios()
    {
        global $pdo;

        $array = [];
        $sql = $pdo->prepare("SELECT
               *,
               (SELECT anuncios_imagens.url FROM anuncios_imagens WHERE anuncios_imagens.id_anuncio = anuncio.id LIMIT 1) as url 
               FROM anuncios WHERE id_usuario = :id_usuario");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }
}