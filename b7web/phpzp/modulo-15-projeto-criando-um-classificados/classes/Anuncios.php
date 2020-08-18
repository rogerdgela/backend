<?php


class Anuncios
{
    public function getMeusAnuncios()
    {
        global $pdo;

        $array = [];
        $sql = $pdo->prepare("SELECT
               *,
               (SELECT anuncios_imagens.url FROM anuncios_imagens WHERE anuncios_imagens.id_anuncio = anuncios.id LIMIT 1) as url 
               FROM anuncios WHERE id_usuario = :id_usuario");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function addAnuncio($titulo, $categoria, $valor, $descricao, $estado)
    {
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO anuncios(id_usuario, id_categoria, titulo, descricao, valor, estado)
                                        VALUES (:id_usuario, :id_categoria, :titulo, :descricao, :valor, :estado)");

        $sql->bindValue(':id_usuario',$_SESSION['cLogin']);
        $sql->bindValue(':id_categoria',$categoria);
        $sql->bindValue(':titulo',$titulo);
        $sql->bindValue(':descricao',$descricao);
        $sql->bindValue(':valor',$valor);
        $sql->bindValue(':estado',$estado);
        $sql->execute();

        return true;
    }
}