<?php

class Post
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function listar()
    {
        $query = "select * from posts";
        $stmt = $this->db->query($query);
        $stmt->execute();

        $dados = $stmt->fetchAll();

        $array = array();

        foreach ($dados as $d){
            $array[] = $d['titulo'];
        }

        return $array;
    }
}