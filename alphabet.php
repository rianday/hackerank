<?php
    $handle = fopen ("php://stdin","r");
	$n = fgets(STDIN);
    $string = strtoupper(trim($n));     
    $string = preg_replace('/[^A-Z\-]/', '', $string);

    echo $string."\n";

	$alphabet = array('A','B','C','D','E','F','G','H','I','J', 'K', 'L', 'M', 'N', 'O' ,'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');


	for($i=0; $i < strlen($string); $i++){
		//echo substr($string,$i,1)."\n";	
		$hasil[] = array_search(substr($string,$i,1), $alphabet)+1;	
	}

	//print_r($hasil);
	echo min($hasil)." ".max($hasil)." ".array_sum($hasil);

	// echo array_search('B', $alphabet);
?>
