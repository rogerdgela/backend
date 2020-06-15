<?php

include_once "Estagio.php";
include_once "ContratoClt.php";

class FolhaDePagamento
{
    public function calcular(Remuneravel $funcionario)
    {
        return $funcionario->remuneracao();
    }
}