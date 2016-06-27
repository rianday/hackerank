<?php
/*	$handle = fopen ("php://stdin","r");
	$n = fgets(STDIN);
	//$n2 = str_replace(' ', '-', $n); // Replaces all spaces with hyphens.
	$n2 = trim($n); 
   	echo $n2."\n";

   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $n2);
   	echo $string."\n";
	echo strrev($string)."\n";
*/


 /* Enter your code here. Read input from STDIN. Print output to STDOUT */
  
    $handle = fopen ("php://stdin","r");
	$n = fgets(STDIN);
    $string = trim($n);     
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

	if(strlen($string)>=2 and strlen($string)<=1000){
        $string_balikan = strrev($string);
        
        if(strtoupper($string) == strtoupper($string_balikan))
            echo "PALINDROME";
        else echo "NOT PALINDROME";
    }
?>
