<?php 

$students=array("kamal","jamal","loskor","pollob");
$students[1]="rubel"; // replace jamal with rubel
$s=array_pop($students);  // delete last element
$d=array_shift($students);  // delete first element
echo $d."\n";
array_push($students,"salman"); // insert last position
array_unshift($students,"sojol"); // insert first position
$students[]="nabil"; // insert last position
print_r($students);

$food = preg_split('/(, |,)/','apple,banana, mango, lichi,tomato,guava'); // split with ',' and ', '
// $food = explode(', ','apple,banana, mango, lichi,tomato,guava');
print_r($food);