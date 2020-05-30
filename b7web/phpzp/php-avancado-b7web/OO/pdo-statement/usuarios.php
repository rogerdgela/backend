<?php
/**
 * Created by PhpStorm.
 * User: Rogerio
 * Date: 28/10/2019
 * Time: 21:46
 */

class Usuarios
{
    private $con;

    public function __construct()
    {
        try{
            $this->con = new PDO("mysql:dbname=crudoo;host=localhost","root","");
        }catch (PDOException $e){
            echo "Falha: ".$e->getMessage();
        }
    }

    public function selecionar($id){
        $sql = $this->con->prepare("SELECT * FROM usuarios WHERE  id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();

        $array = array();
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function inserir($nome, $email, $senha){
        $sql = $this->con->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindValue(":senha",md5($senha));
        $sql->execute();
    }

    public function atualizar($nome, $email, $senha, $id){
        $sql = $this->con->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
        $sql->execute(array($nome, $email, md5($senha), $id));
    }

    public function deletar($id){
        $sql = $this->con->prepare("DELETE FROM usuarios WHERE id = ?");
        $sql->bindValue(1,$id);
        $sql->execute();
    }
}