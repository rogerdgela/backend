<?php


class grupos extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getGrupos()
    {
        $array = [];

        $sql = "SELECT id, titulo FROM grupos";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function criar($grupo)
    {
        $id_usuario = $_SESSION['lgsocial'];

        $sql = "INSERT INTO grupos SET id_usuario = '$id_usuario', titulo = '$grupo'";
        $this->db->query($sql);

        return $this->db->lastInsertId();
    }
}