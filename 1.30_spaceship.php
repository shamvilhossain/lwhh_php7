<?php
// spaceship operator
$a=10;
$b=10;
echo $a<=>$b;
echo PHP_EOL;

// null-coleace operator
$dlat=4.5;
$ulat;
$data =  $ulat ?? $dlat;
echo $data;


?>