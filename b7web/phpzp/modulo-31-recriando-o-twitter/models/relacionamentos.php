<?php


class relacionamentos extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function seguir($seguidor, $seguido)
    {
        $sql = "INSERT INTO relacionamentos (id_seguidor, id_seguido) VALUES ('$seguidor', '$seguido')";
        $this->db->query($sql);
    }

    public function deseguir($seguidor, $seguido)
    {
        $sql = "DELETE FROM relacionamentos WHERE id_seguidor = '$seguidor' AND id_seguido = '$seguido'";
        $this->db->query($sql);
    }
}