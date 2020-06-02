<?php

class Tempo
{
    public static function diferenca($tempo)
    {
        $tempo = strtotime($tempo);
        $agora = time();
        $diferenca = $agora - $tempo;

        if($diferenca > ((24*60)*60)) {
            // dias
            $diferenca = (($diferenca / 60) / 60);

            $t = floor($diferenca/24);
            return $t.' dia'.(($t==1)?'':'s');
        } else {
            // horas
            $diferenca = (($diferenca / 60) / 60);

            if(floor($diferenca*60*60) < 60) {
                $t = floor($diferenca*60*60);
                return $t.' segundo'.(($t==1)?'':'s');
            } elseif($diferenca < 1) {
                $t = floor($diferenca*60);
                return $t.' minuto'.(($t==1)?'':'s');
            } else {
                $t = floor($diferenca);
                return $t.' hora'.(($t==1)?'':'s');
            }
        }

        return $diferenca;
    }
}