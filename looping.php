<?php

$_fp = fopen ("php://stdin","r");
fscanf($_fp,"%d",$n);

   for($a_i = 0; $a_i < $n; $a_i++) {
       $a_temp = fgets($_fp);
       $a[] = explode(" ",$a_temp);
    }

    for($k = 0; $k < count($a); $k++){
       for($j=0; $j< $a[$k][2]; $j++){
       	   // $hasil_temp = 0 ;
           $hasil_temp = $a[$k][0];
       		// echo "a = ".$a[$k][0];
           for($i = 0; $i <= $j; $i++){
                $hasil_temp += ((exp(0*log(2)))*$a[$k][1]);
                // echo "operasi = ".(exp(0*log(2)));//(2^$i*$a[$k][1]);
           }
           $hasil[] = $hasil_temp;
       }    
       echo implode(" ",$hasil)."\n";
    }

?>
