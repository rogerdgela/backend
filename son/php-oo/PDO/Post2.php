<?php

include_once "Conexao.php";

class Post2
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

    public function getPostByUser($user)
    {
        $query = "select * from posts where user = :user";
        $stmt = $this->db->prepare($query);
        //$stmt->bindParam(":user", $user);
        $stmt->bindValue(":user", $user, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }
}
$conexao = new Conexao;
$db = $conexao->connect();

$post = new Post2($db);
$posts = $post->getPostByUser("teste");