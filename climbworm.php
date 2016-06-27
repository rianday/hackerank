<?php
 /* Enter your code here. Read input from STDIN. Print output to STDOUT */
    $handle = fopen ("php://stdin","r");
    // fscanf($handle, "%d", $n);
    // $param =fgets($handle);
    // $param =;
    $parameter = explode(" ",fgets(STDIN));
    
        // print_r($parameter);
       $waktu = 0;
    if($parameter[0] > 0 and $parameter[1] > 0 and $parameter[2] > 0){
        while($parameter[0]){
            $waktu++;
            $parameter[0] -= $parameter[1];
            
            if($parameter[0]<=0) break;
            $waktu++;
            $parameter[0] += $parameter[2];
        }
    }

    fwrite(STDOUT, $waktu);
fclose($handle);
    // $handle = fopen('php://stdin','r');
    
    // $n = fgets(STDIN);
    // $u = fgets(STDIN);  
    // $d = fgets(STDIN);

    // if($n>0 and $u>0 and $d>0){
    //    $ret = 0;
    //     while($n){
    //         $ret++;
    //         $n-=$u;
    //         if($n<=0) break;
    //         $ret++;
    //         $n+=$d;
    //     }
    // }

    // fwrite(STDOUT, $ret);
    // fclose($handle);