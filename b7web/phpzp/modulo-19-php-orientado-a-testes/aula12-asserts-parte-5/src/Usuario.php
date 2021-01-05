<?php


class Usuario
{
    private $nome;
    private $sobrenome;
    private $idade;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getIdade($str = false)
    {
        if ($str) {
            return $this->idade . " anos";
        }
        return $this->idade;
    }
}