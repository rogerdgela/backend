<?php
class usuarios extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verificarLogin()
    {
		if(!isset($_SESSION['lgsocial']) || (isset($_SESSION['lgsocial']) && !empty($_SESSION['lgsocial']))) {
			header("Location: ".BASE."login");
		    exit();
		}
	}

	public function logar($email, $senha){
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetch(PDO::FETCH_ASSOC);
            $_SESSION['lgsocial'] = $sql['id'];

            header("Location: ".BASE);
            exit();
        }

        return "E-mail e/ou senha errado!";
    }
}