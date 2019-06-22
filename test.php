<?php
include_once"functions.php";
$x=5;
echo "factorial of {$x} is ".fact($x);
echo PHP_EOL;
echo sum(4,2,5,7,8,3);
echo PHP_EOL;
echo fibinacci_recursion(0,1,9);
echo PHP_EOL;
doso();
echo PHP_EOL;
function do_ins(){  // local scope
    global $inside;
    $inside= 'ins';
}
do_ins();
echo $inside;
?>