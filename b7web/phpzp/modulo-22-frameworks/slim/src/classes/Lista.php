<?php
class Lista {
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getLista(){
        $array = [];

        $sql = $this->db->query("SELECT * FROM lista");

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}