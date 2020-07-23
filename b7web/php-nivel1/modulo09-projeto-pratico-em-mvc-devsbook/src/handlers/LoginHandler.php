<?php

namespace src\handlers;

use \src\models\User;

class LoginHandler
{
    public static function checkLogin()
    {
        if(!empty($_SESSION['token'])){
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->one();

            if(is_array($data) && count($data) > 0){
                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->name = $data['name'];
                $loggedUser->avatar = $data['avatar'];

                return $loggedUser;
            }
        }

        return false;
    }

    public static function verifyLogin($email, $password)
    {
        $user = User::select()->where('email', $email)->one();

        if($user){
            if(password_verify($password, $user['password'])){
                $token = md5(time().rand(0,9999).time());

                User::update()->set('token', $token)->where('email',$email)->execute();
                return $token;
            }
        }

        return false;
    }

    public static function emailExists($email)
    {
        $user = User::select()->where('email', $email)->one();
        return $user ? true : false;
    }

    public static function adduser($name, $email, $password, $birthdate)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,9999).time());

        User::insert([
            'name' => ucwords(trim($name)),
            'email' => mb_strtolower(trim($email)),
            'password' => $hash,
            'birthdate' => $birthdate
        ])->execute();

        return $token;
    }
}