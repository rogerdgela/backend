<?php

require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function add(Usuario $u)
    {

    }

    public function findAll()
    {
        $array = [];

        $sql = $this->pdo->query('SELECT * FROM usuarios');

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($dados as $item){
                $user = new Usuario();
                $user->setId($item['id']);
                $user->setNome($item['nome']);
                $user->setEmail($item['email']);

                $array[] = $user;
            }
        }

        return $array;
    }

    public function findById($id)
    {

    }

    public function update(Usuario $u)
    {

    }

    public function delete($id)
    {

    }
}