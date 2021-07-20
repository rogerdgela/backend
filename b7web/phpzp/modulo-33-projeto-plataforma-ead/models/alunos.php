<?php

class Alunos extends model
{
    private $info;

    public function isLogged()
    {
        if (isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno'])) {
            return true;
        } else {
            return false;
        }
    }

    public function fazerLogin($email, $senha)
    {
        $sql = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $row = $sql->fetch(PDO::FETCH_ASSOC);

            $_SESSION['lgaluno'] = $row['id'];

            return true;
        }

        return false;
    }

    public function setALuno($id)
    {
        $sql = "SELECT * FROM alunos WHERE id = '$id'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $this->info = $sql->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function getNome()
    {
        return $this->info['nome'];
    }

    public function getId()
    {
        return $this->info['id'];
    }
}
?>