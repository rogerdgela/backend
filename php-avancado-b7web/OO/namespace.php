<?php
require "namespaceV1.php";
require "namespaceV2.php";

$sobre = new \aplicacao\v2\sobre();

echo "Minha versao é: ".$sobre->getVersao();
?>