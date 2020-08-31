<?php


class Anuncios extends Model
{
    public function getQuantidade()
    {
        $sql = "SELECT COUNT(*) as c FROM anuncios";
        $sql = $this->conn->query($sql);

        if($sql->rowCount() > 0){
            $retorno = $sql->fetch(PDO::FETCH_ASSOC);

            return $retorno['c'];
        }

        return false;
    }
}