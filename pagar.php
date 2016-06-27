<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
for($i=1; $i<=$n ; $i++) {
   for($j=$n; $j>$i; $j--)
    echo " ";
   for($k=1; $k<=$i; $k++)
    echo "#";

	echo "\n";
}
?>