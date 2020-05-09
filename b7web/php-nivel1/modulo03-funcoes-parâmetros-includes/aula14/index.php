<?php

echo date('d/m/Y H:i:s');
echo "<br>";
echo date("z");
echo "<br>";
echo $data = date('Y-m-d');
echo "<br>";
echo date('d/m/Y', strtotime($data));
echo "<br>";
echo time();