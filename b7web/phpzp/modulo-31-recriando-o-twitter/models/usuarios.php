<?php
class usuarios extends model
{
    public function isLogged()
	{
		if(isset($_SESSION['twlg']) && !empty($_SESSION['twlg'])){
			return "teste";
		}

		return;
	}

    public function usuarioExiste($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            return true;
        }

        return false;
    }

    public function inserirUsuario($nome, $email, $senha)
    {
        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
        $this->db->query($sql);

        return $this->db->lastinsertId();
    }

    public function fazerLogin($email,$senha)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $dado = $sql->fetch(PDO::FETCH_ASSOC);

            $_SESSION['twlg'] = $dado['id'];

            return true;
        }

        return false;
    }
}