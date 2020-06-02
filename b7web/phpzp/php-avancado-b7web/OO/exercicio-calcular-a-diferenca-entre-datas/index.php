<?php

include "Tempo.php";

$tempo = "2020-06-2 09:09:09";
$data = date("d/m/Y H:i:s", strtotime($tempo));

echo $data . "<br>";
echo "Foi há " . Tempo::diferenca($tempo) . " atrás";