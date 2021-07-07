<?php


class posts extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addPost($msg, $foto)
    {
        $usuario = $_SESSION['lgsocial'];
        $tipo = 'texto';
        if(count($foto) > 0){
            $tipos = ['image/jpeg', 'image/jpg', 'image/png'];
            if(in_array($foto['type'], $tipos)){
                $tipo = 'foto';
                $url = md5(time());
                switch ($foto['type']){
                    case 'image/jpeg':
                    case 'image/jpg': $url .= '.jpg'; break;
                    case 'image/png': $url .= '.png'; break;
                }
                move_uploaded_file($foto['tmp_name'], 'assets/images/posts/' . $url);
            }
        }

        $sql = "INSERT INTO posts SET id_usuario = '$usuario', data_criacao = NOW(), tipo = '$tipo', texto = '$msg', url = '$url', id_grupo = '0'";
        $this->db->query($sql);
    }

    public function getFeed()
    {
        $array = [];
        $r = new relacionamentos();
        $ids = $r->getIdFriends($_SESSION['lgsocial']);

        $sql = "SELECT 
        *,
        (SELECT usuarios.nome FROM usuarios WHERE usuarios.id = posts.id_usuario) as nome,
        (SELECT count(*) FROM post_likes WHERE post_likes.id_post = posts.id) as likes,
        (SELECT count(*) FROM post_likes WHERE post_likes.id_post = posts.id AND post_likes.id_usuario = " . $_SESSION['lgsocial'] . ") as liked
        FROM posts WHERE id_usuario IN ('" .
            implode(',',$ids) .
            "') ORDER BY data_criacao DESC";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function isLiked($id, $id_usuario)
    {
        $sql = "SELECT id FROM post_likes WHERE id_post = '$id' AND id_usuario = '$id_usuario'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            return true;
        }

        return false;
    }

    public function removeLike($id, $id_usuario)
    {
        $sql = "DELETE FROM post_likes WHERE id_post = '$id' AND id_usuario = '$id_usuario'";
        $this->db->query($sql);
    }

    public function addLike($id, $id_usuario)
    {
        $sql = "INSERT INTO post_likes SET id_post = '$id', id_usuario = '$id_usuario'";
        $this->db->query($sql);
    }
}