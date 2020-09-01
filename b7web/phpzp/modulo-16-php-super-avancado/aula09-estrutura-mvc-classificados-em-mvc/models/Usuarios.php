<?php


class Usuarios extends Model
{
    public function getTotalUsuarios()
    {
        $sql = $this->conn->query("SELECT COUNT(*) as c FROM usuarios");
        $row = $sql->fetch();

        return $row['c'];
    }

    public function cadastrar($nome, $email, $senha, $telefone)
    {
        $sql = $this->conn->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() == 0){
            $sql = $this->conn->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, telefone = :telefone");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->bindValue(":telefone", $telefone);
            $sql->execute();

            return true;
        }

        return false;
    }

    public function login($email, $senha){
        $sql = $this->conn->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch(PDO::FETCH_ASSOC);
            $_SESSION['cLogin'] = $dado['id'];
            $_SESSION['cNomeUsuario'] = $dado['nome'];
            return true;
        }

        return false;
    }
}