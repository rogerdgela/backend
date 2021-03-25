<?php
namespace Models;

use \Core\Model;
use \Models\Jwt;

class Users extends Model
{
    private $id_user;

    public function checkCredentials($email, $pass)
    {
        $sql = 'SELECT id, pass FROM users WHERE email = :email';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch(PDO::FETCH_ASSOC);

            if(password_verify($pass, $info['pass'])){
                $this->id_user = $info['id'];

                return true;
            }
        }

        return false;
    }

    public function createJwt()
    {
        $jwt = new Jwt();

        return $jwt->create(['id_user' => $this->id_user]);
    }
}