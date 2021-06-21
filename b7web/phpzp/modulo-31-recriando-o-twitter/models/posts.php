<?php


class posts extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function inserirPost($msg)
    {
        $id_usuario = $_SESSION['twlg'];
        $sql = "INSERT INTO posts set id_usuario = '$id_usuario', data_post = NOW(), mensagem = '$msg'";
        $this->db->query($sql);
    }

    public function getFeed($lista, $limite)
    {
        $array = [];

        if(count($lista) > 0){
            $sql = "SELECT *, (SELECT nome FROM usuarios WHERE usuarios.id = posts.id_usuario) as nome FROM posts WHERE id_usuario IN (" .
                implode(',', $lista) . ") ORDER BY data_post DESC LIMIT ". $limite;
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        return $array;

    }
}