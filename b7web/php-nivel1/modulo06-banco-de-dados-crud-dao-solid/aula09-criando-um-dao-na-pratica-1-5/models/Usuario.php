<?php


class Usuario
{
    private $id;
    private $nome;
    private $email;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = trim($id);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = ucwords(trim($nome));
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = strtolower(trim($email));
    }
}

interface UsuarioDAO
{
    public function add(Usuario $u);
    public function findAll();
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
}