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

    public function excluirAnuncio($id)
    {
        global $pdo;

        $sql = $pdo->prepare("DELETE FROM anuncios_imagens WHERE id_anuncio = :id_anuncio");
        $sql->bindValue(':id_anuncio', $id);
        $sql->execute();

        $sql = $pdo->prepare("DELETE FROM anuncios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function getAnuncio($id)
    {
        global $pdo;

        $array = [];
        $sql = $pdo->prepare("SELECT * FROM anuncios WHERE id = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $id)
    {
        global $pdo;

        $sql = $pdo->prepare("UPDATE anuncios SET id_usuario = :id_usuario,
                                                            id_categoria = :id_categoria,
                                                            titulo = :titulo,
                                                            descricao = :descricao,
                                                            valor = :valor,
                                                            estado = :estado
                                        WHERE id = :id");

        $sql->bindValue(':id_usuario',$_SESSION['cLogin']);
        $sql->bindValue(':id_categoria',$categoria);
        $sql->bindValue(':titulo',$titulo);
        $sql->bindValue(':descricao',$descricao);
        $sql->bindValue(':valor',$valor);
        $sql->bindValue(':estado',$estado);
        $sql->bindValue(':id',$id);
        $sql->execute();

        return true;
    }
}