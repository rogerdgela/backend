<?php
$ingredientes = array(  'Açucar',
                        'Farinha de Trigo',
                        'Ovo',
                        'Leite',
                        'Fermento em pó' );

for ($i=0; $i < sizeof($ingredientes); $i++){
    echo $ingredientes[$i]."<br>";
}