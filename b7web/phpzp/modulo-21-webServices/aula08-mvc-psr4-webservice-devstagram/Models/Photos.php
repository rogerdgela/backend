<?php

namespace Models;

use \Core\Model;

class Photos extends Model
{
    public function getPhotosCount($id_user)
    {
        $sql = 'SELECT count(*) as c FROM photos WHERE id_user = :id';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_user);
        $sql->execute();
        $info = $sql->fetch(\PDO::FETCH_ASSOC);

        return $info['c'];
    }
}