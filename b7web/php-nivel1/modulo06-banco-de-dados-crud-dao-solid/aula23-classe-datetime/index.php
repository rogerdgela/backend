<?php
$hoje = new DateTime();
$fim_pandemia = new DateTime('2020-06-23 22:10');

$diferenca = $hoje->diff($fim_pandemia);
echo $diferenca->format('%d dias, %h horas, %i minutos');

//$date = new DateTime();

/*$date->sub(DateInterval::createFromDateString('2 days 5 minutes'));*/
/*$date->add(DateInterval::createFromDateString('2 days 5 minutes'));*/
//$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

/*echo $date->format('d/m/Y H:i:s');*/