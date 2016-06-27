<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();

$hasil_l = 0;
$hasil_r = 0;

for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
		$hasil_l += $a[$a_i][$a_i];
}

$i = 0;
for($a_j = ($n-1); $a_j >= 0; $a_j--) {
		//$hasil_r[] = $a[$i][$a_j]; 	
		$hasil_r += $a[$i][$a_j]; 	
		$i++;
}

echo abs($hasil_l-$hasil_r);
//var_dump($hasil_r);
?>
