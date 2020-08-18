<?php


class Categorias
{
    public function getLista()
    {
        global $pdo;
        $array = [];

        $sql = $pdo->query("SELECT * FROM categorias");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }
}