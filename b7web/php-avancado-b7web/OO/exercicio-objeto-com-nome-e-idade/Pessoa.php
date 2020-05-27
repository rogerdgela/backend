<?php


class Pessoa
{
    private $nome;
    private $dataNascimento;

    public function __construct($nome, $dataNascimento)
    {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        $data = explode('/', $this->dataNascimento);

        $dataAtual = time();
        $dataInformada = strtotime($data[2] . '-' . $data[1] . '-' . $data[0]);

        $diferenca = $dataAtual - $dataInformada;

        $anos = date('Y', $diferenca) - 1970;

        return $anos;
    }
}