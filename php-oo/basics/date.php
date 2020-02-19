<?php

$data = "14. 04. 1984";

$date = \DateTime::createFromFormat('d. m. Y', $data);

//echo $date->format('d/m/Y');

$date2 = clone $date;
$date2->add(new \DateInterval('P2M2D'));

echo $date2->format('d/m/Y');

if($date > $date2){
    echo "date é maior";
}

$diff = $date2->diff($date);
echo "Diferença: ".$diff->format('%m mes, %d dias = %a total de dias');

$string = "first monday";
$segunda = \DateInterval::createFromDateString($string);
$iterator = new \DatePeriod($date, $segunda, $date2, \DatePeriod::EXCLUDE_START_DATE);

foreach ($iterator as $d){
    echo $d->format('d/m/Y').'<br>';
}