<?php
class Database
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:dbname=jedi_dao;host=localhost', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
}

class UsuarioDao extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($fields = [], $where = [])
    {
        $usuarios = [];
        $valores = [];

        if(count($fields) == 0){
            $fields = ['*'];
        }

        $sql = "SELECT ".implode(',', $fields)." FROM usuario ";

        if(count($where > 0)){
            $tabelas = array_keys($where);
            $valores = array_values($where);
            $aux = [];

            foreach ($tabelas as $tabela){
                $aux[] = $tabela." = ?";
            }
        }

        $sql .= implode(' AND ', $aux);
        $sql = $this->db->prepare($sql);
        $sql->execute($valores);

        if($sql->rowCount() > 0){
            foreach ($sql->fetchAll() as $item){
                $usuarios[] = new Usuario($item);
            }
        }

        return $usuarios;
    }

    public function insert(Usuario $usuario){

        $fields = [
            'name' => $usuario->getName(),
            'email' => $usuario->getEmail(),
            'pass' => $usuario->getPass()
        ];

        if(count($fields) > 0){
            $questions = [];

            for($q = 0; $q < count(array_keys($fields)); $q++){
                $questions[] = "?";
            }
            $sql = "INSERT INTO usuario (".implode(',',array_keys($fields)).") VALUES (".implode(',',$questions).")";
            $sql = $this->db->prepare($sql);
            $sql->execute(array_values($fields));
        }
    }
}

class Usuario
{
    private $name;
    private $email;
    private $id;
    private $pass;

    public function __construct($array)
    {
        $this->name = (isset($array['name'])) ? $array['name'] : '';
        $this->email = (isset($array['email'])) ? $array['email'] : '';
        $this->pass = (isset($array['pass'])) ? $array['pass'] : '';
        $this->id = (isset($array['id'])) ? $array['id'] : '';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPass()
    {
        return $this->pass;
    }
}