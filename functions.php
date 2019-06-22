<?php
function fact(int $n):int { // type hinting only for php 7  // return type int (after :)
    // if(gettype($n)!="integer"){
    //     return 'invalid';
    // }
    $result=1;
    for($i=$n; $i>1; $i--){
        $result *= $i;
    }
    //return 'asd';
    return $result;

}

function sum($x,$y, int ...$numbers):int{  // unlimited variable only in php 7
    $result=0;
    //echo $x;
    // sum excluding $x & $y 
    for($i=0; $i<count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}

function fibinacci_recursion($old,$new,$end){  // fibonacci using recursion
    static $start;
    $start= $start ?? 1;
    if($start > $end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp=$old + $new;
    $old=$new;
    $new=$_temp;
    fibinacci_recursion($old,$new,$end);
}

$test='tiger';
function doso(){  // global scope
    echo $GLOBALS['test'];
}




