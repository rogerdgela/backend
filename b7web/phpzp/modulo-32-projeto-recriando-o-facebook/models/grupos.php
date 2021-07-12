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

    public function getInfo($id_grupo)
    {
        $array = [];

        $sql = "SELECT * FROM grupos WHERE id = '$id_grupo'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetch(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function criar($grupo)
    {
        $id_usuario = $_SESSION['lgsocial'];

        $sql = "INSERT INTO grupos SET id_usuario = '$id_usuario', titulo = '$grupo'";
        $this->db->query($sql);

        $id_grupo = $this->db->lastInsertId();

        $this->addGrupo($id_grupo, $id_usuario);

        return $id_grupo;
    }

    public function addGrupo($id_grupo, $id_usuario)
    {
        $sql = "INSERT INTO grupos_membros SET id_usuario = '$id_usuario', id_grupo = '$id_grupo'";
        $this->db->query($sql);
    }

    public function isMembro($id_grupo, $id_usuario)
    {
        $sql = "SELECT * FROM grupos_membros WHERE id_grupo = '$id_grupo' AND id_usuario = '$id_usuario'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            return true;
        }

        return false;
    }

    public function getQtyMembros($id_grupo)
    {
        $sql = "SELECT count(*) as c FROM grupos_membros WHERE id_grupo = '$id_grupo'";
        $sql = $this->db->query($sql);
        $sql =  $sql->fetch();

        return $sql['c'];
    }
}