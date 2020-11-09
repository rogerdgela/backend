<?php
require_once 'classes.php';

$luz = new Luz();

$c = new LuzOffCommand($luz);
callCommand($c);

echo "Luz: ". $luz->getStatus();