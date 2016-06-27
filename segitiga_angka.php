<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
for($i=1; $i<=$n ; $i++) {
    for($j=1; $j<=$i; $j++)
    	echo $j;
	echo "\n";
}
	echo "\n";

$k=1;
for($i=1; $i<=$n ; $i++) {
    for($j=1; $j<=$i; $j++)
    	echo $k++;
	echo "\n";
}

	echo "\n";

for($a=$n; $a>=1; $a--){
	for($b=1; $b<=$a; $b++)
		echo $b;
	echo "\n";
}

	echo "\n";

$l=9;
for($a=$n; $a>=1; $a--){
	for($b=1; $b<=$a; $b++)
		echo $l--;
	echo "\n";
}

	echo "\n";

for($i=1; $i<=$n; $i++){ //tinggi
	for($j=1; $j<=$n+($i-1); $j++){ //lebar
		// for($j2=$n; $j2>=$j; $j2--)
			// echo " ";
		echo $j;
	}


	// for($j1=($n+($n-1)); $j1>=1; $j1--)
		// for($j2=1; $j2<=($n+($n-1)); $j2++)
			// echo ($j1%2==1) ? $j2 : ' '; 
	echo "\n";

}
?>