<?php


class Categorias extends Model
{
    public function getLista()
    {
        $array = [];

        $sql = $this->conn->query("SELECT * FROM categorias");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }
}