<?php

class NomeFilter extends \FilterIterator
{
    private $nomeFiltro;

    public function __construct(Iterator $iterator, $filter)
    {
        parent::__construct($iterator);
        $this->nomeFiltro = $filter;
    }

    public function accept()
    {
        $nome = $this->getInnerIterator()->current();

        if(strcasecmp($nome['nome'], $this->nomeFiltro) == 0){
            return false;
        }
        return true;
    }
}

$dados = [
    ['nome' => 'Rogerio'],
    ['nome' => 'Jvm'],
    ['nome' => 'Maria'],
];

$objeto = new \ArrayObject($dados);

$iterator = new NomeFilter($objeto->getIterator(), 'Jvm');

foreach ($iterator as $result){
    echo $result['nome']."<br>";
}