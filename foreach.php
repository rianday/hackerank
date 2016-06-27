<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
//array_walk($arr,'intval');
$count_positive = 0;
$count_negative = 0;
$count_nol = 0;

foreach($arr as $index => $value){
    $count_positive += ($value > 0) ? 1 : 0;
    $count_negative += ($value < 0) ? 1 : 0;
    $count_nol += ($value == 0) ? 1 : 0;
}

// echo $count_positive."\n";
// echo $count_negative."\n";
// echo $count_nol."\n";
//echo $handle."\n";

print number_format((float)$count_positive/count($arr), 6, ".", "")."\n";
print number_format((float)$count_negative/count($arr), 6, ".", "")."\n";
print number_format((float)$count_nol/count($arr), 6, ".", "")."\n";

fclose($handle);
?>
