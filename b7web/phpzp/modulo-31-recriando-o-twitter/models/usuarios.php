<?php
class usuarios extends model
{
    private $uid;

    public function __construct($id = null)
    {
        parent::__construct();

        if(!empty($id)){
            $this->uid = $id;
        }
    }

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

    public function getNome()
    {
        if(!empty($this->uid)){
            $sql = "SELECT nome FROM usuarios WHERE id = '".$this->uid."'";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $sql = $sql->fetch(PDO::FETCH_ASSOC);

                return $sql['nome'];
            }

            return;
        }
    }

    public function countSeguidos()
    {
        $sql = "SELECT * FROM relacionamentos WHERE id_seguidor = '".$this->uid."'";
        $sql = $this->db->query($sql);

        return $sql->rowCount();
    }

    public function countSeguidores()
    {
        $sql = "SELECT * FROM relacionamentos WHERE id_seguido = '".$this->uid."'";
        $sql = $this->db->query($sql);

        return $sql->rowCount();
    }

    public function getUsuarios($limite)
    {
        $array = [];
        $sql = "SELECT 
                *,
                (SELECT count(*) FROM relacionamentos WHERE relacionamentos.id_seguidor = '".$this->uid."' AND relacionamentos.id_seguido = usuarios.id) as seguido FROM usuarios WHERE id != ". $this->uid ." ORDER BY rand() LIMIT ".$limite;
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function userExite($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = '".$id."'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            return true;
        }

        return;
    }

    public function getSeguidos()
    {
        $dados = [];

        $sql = "SELECT id_seguido FROM relacionamentos WHERE id_seguidor = '".$this->uid."'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($sql as $seg){
                $dados[] = $seg['id_seguido'];
            }
        }

        return $dados;
    }
}