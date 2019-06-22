<?php
$foods=[
    'vege'=>'tomato,capsicum,ladis finger',
    'fruit'=>'banana, apple, lichi',
    'drinks'=>'water, milk'
];

$foods['drinks'] .=", juice"; // adding new element
//print_r($foods);
$keys= array_keys($foods);
for($i=0;$i<count($keys);$i++){
    $key=$keys[$i];
    echo $foods[$key]."\n";
}