<?php

//var $sum = 0;

function solveYou(&$value, $key){
    //$sum = $sum + $value;//array_sum($value);
    $value += $value;// .' || '. $key;
    //$sum_ = $sum_ + $value;
    //$value);
}    
    
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr2 = array($arr);
//array_walk($arr,'solveYou');


array_walk(
    $arr2,
    function (&$value){
    	$value = array_sum($value);
    }
);

//var_dump();
echo $arr2[0];
fclose($handle);
?>
