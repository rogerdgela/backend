<?php
interface OutputInterface
{
    public function load($array);
}

class JsonOutput implements OutputInterface
{
    public function load($array)
    {
        return json_encode($array);
    }
}

class ArrayOutput implements OutputInterface
{
    public function load($array)
    {
        return $array;
    }
}

class Produtos
{
    private $array;
    private $output;

    public function getLista()
    {
        $this->array = [
            [
                'nome' => 'Rogerio',
                'id' =>2
            ],
            [
                'nome' => 'Diego',
                'id' => 2
            ]
        ];
    }

    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function getOutput()
    {
        return $this->output->load($this->array);
    }
}