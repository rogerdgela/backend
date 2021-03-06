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
        $sql = $this->pdo->prepare('INSERT INTO usuarios (nome, email) VALUES (:nome, :email);');
        $sql->bindValue(':nome', $u->getNome());
        $sql->bindValue(':email', $u->getEmail());
        $sql->execute();

        $u->setId($this->pdo->lastInsertId());

        return $u;
    }

    public function findAll()
    {
        $sql = $this->pdo->query('SELECT * FROM usuarios');

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($dados as $item){
                $user = new Usuario();
                $user->setId($item['id']);
                $user->setNome($item['nome']);
                $user->setEmail($item['email']);

                $infos[] = $user;
            }
        }

        return $infos;
    }

    public function findById($id)
    {

    }

    public function findByEmail($email)
    {
        $sql = $this->pdo->prepare('SELECT * FROM usuarios WHERE email = :email');
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();

            $usuario = new Usuario();
            $usuario->setId($dados['id']);
            $usuario->setNome($dados['nome']);
            $usuario->setEmail($dados['email']);

            return $usuario;
        }else{
            return false;
        }
    }

    public function update(Usuario $u)
    {

    }

    public function delete($id)
    {

    }
}