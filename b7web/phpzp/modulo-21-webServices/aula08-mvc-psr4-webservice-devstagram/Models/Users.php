<?php
namespace Models;

use \Core\Model;
use \Models\Jwt;
use \Models\Photos;

class Users extends Model
{
    private $id_user;

    public function create($name, $email, $pass)
    {
        if(!$this->emailExists($email)){
            $hash = password_hash($pass, PASSWORD_DEFAULT);

            $sql = 'INSERT INTO users (name, email, pass) VALUES (:name, :email, :pass)';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':pass', $hash);
            $sql->execute();

            $this->id_user = $this->db->lastInsertId();

            return true;
        }else{
            return false;
        }
    }

    public function checkCredentials($email, $pass)
    {
        $sql = 'SELECT id, pass FROM users WHERE email = :email';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch(\PDO::FETCH_ASSOC);

            if(password_verify($pass, $info['pass'])){
                $this->id_user = $info['id'];

                return true;
            }
        }

        return false;
    }

    public function getId()
    {
        return $this->id_user;
    }

    public function getInfo($id)
    {
        $array = [];

        $sql = 'SELECT id,name,email,avatar FROM users WHERE id = :id';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch(\PDO::FETCH_ASSOC);

            $photos = new Photos();

            if(!empty($array['avatar'])){
                $array['avatar'] = BASE_URL.'media/avatar/'.$array['avatar'];
            }else{
                $array['avatar'] = BASE_URL.'media/avatar/default.jpg';
            }

            $array['following'] = $this->getFollowingCount($id);
            $array['followers'] = $this->getFollowersCount($id);
            $array['photo_count'] = $photos->getPhotosCount($id);
        }

        return $array;
    }

    public function getFollowingCount($id_user)
    {
        $sql = 'SELECT count(*) as c FROM users_following WHERE id_user_active = :id';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_user);
        $sql->execute();
        $info = $sql->fetch(\PDO::FETCH_ASSOC);

        return $info['c'];
    }

    public function getFollowersCount($id_user)
    {
        $sql = 'SELECT count(*) as c FROM users_following WHERE id_user_passive = :id';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_user);
        $sql->execute();
        $info = $sql->fetch(\PDO::FETCH_ASSOC);

        return $info['c'];
    }

    public function createJwt()
    {
        $jwt = new Jwt();

        return $jwt->create(['id_user' => $this->id_user]);
    }

    public function validadeJwt($token)
    {
        $jwt = new Jwt();
        $info = $jwt->validate($token);

        if(isset($info->id_user)){
            $this->id_user = $info->id_user;
            return true;
        }else{
            return false;
        }
    }

    private function emailExists($email)
    {
        $sql = 'SELECT id FROM users WHERE email = :email';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function editInfo($id, $data)
    {
        if($id === $this->getId()){
            $toChange = [];

            if(!$data['name']){
                $toChange['name'] = $data['name'];
            }

            if(!empty($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL) && $this>$this->emailExists($data['email'])){
                $toChange['email'] = $data['email'];
            }else{
                return 'E-mail com problemas';
            }

            if(!empty($data['pass'])){
                $toChange['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);
            }

            if(count($toChange) > 0){

            }else{
                return 'Não há dados para serem alterados';
            }
        }else{
            return 'Não é permitido editar outro usuário';
        }
    }
}