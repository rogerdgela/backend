<?php
class usuarios extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verificarLogin()
    {
		if(!isset($_SESSION['lgsocial']) || (isset($_SESSION['lgsocial']) && empty($_SESSION['lgsocial']))) {
			header("Location: ".BASE."login");
		    exit();
		}
	}

	public function logar($email, $senha){
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = MD5('$senha')";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetch(PDO::FETCH_ASSOC);
            $_SESSION['lgsocial'] = $sql['id'];

            header("Location: ".BASE);
            exit();
        }

        return "E-mail e/ou senha errado!";
    }

    public function cadastrar($nome, $email, $senha, $sexo){
        if(!$this->verificarUsuarioExistente($email)){
            $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = MD5('$senha'), sexo = '$sexo'";
            $this->db->query($sql);

            $id = $this->db->lastInsertId();
            $_SESSION['lgsocial'] = $id;

            header("Location: ".BASE);
            exit;
        }

        return "Usuário já cadastrado!";
    }

    public function verificarUsuarioExistente($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            return true;
        }

        return false;
    }

    public function getNome($id)
    {
        $sql = "SELECT nome FROM usuarios WHERE id = '$id'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetch(PDO::FETCH_ASSOC);
            return $sql['nome'];
        }

        return null;
    }

    public function getDados($id)
    {
        $array = [];
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetch(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function updatePerfil($data = [])
    {

        if(count($data) >0){
            $sql = "UPDATE usuarios SET ";
            foreach ($data as $key => $value){
                $campos[] = $key . " = '" . $value . "'";
            }

            $sql .= implode(', ', $campos);
            $sql .= " WHERE id = '" . $_SESSION['lgsocial'] . "'";

            $this->db->query($sql);
        }
    }

    public function getSugestoes($limit = 5)
    {
        $array = [];
        $r = new relacionamentos();
        $ids = $r->getRelacionados($_SESSION['lgsocial']);
        $ids[] = $_SESSION['lgsocial'];

        $sql = "SELECT id, nome FROM usuarios WHERE id NOT IN (" . implode(',',$ids) . ") ORDER BY RAND() LIMIT $limit";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return$array;
    }
}