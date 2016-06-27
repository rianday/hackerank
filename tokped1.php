<?php
 /* Enter your code here. Read input from STDIN. Print output to STDOUT */
    
    $handle = fopen("php://stdin","r");


    fscanf($handle,'%d', $J);

    fwrite(STDOUT, fgets(STDIN, $J));
    die();
    // $varString = fgets(STDIN);
    $varString = strtoupper(trim(fgets(STDIN)));

    $min = 0;
    $max = 0;
    $total = 0;
    if(strlen($varString) <= 1024){
        $alphabet = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        for($i = 0; $i < strlen($varString); $i++){
            $potongan = substr($varString,$i,1);
            $indexnya = 0;
            $indexnya = array_search($potongan, $alphabet);
            if($indexnya >= 0 and in_array($potongan, $alphabet)){
                $indexnya +=1;
                fwrite(STDOUT, $potongan .' || '.$indexnya."\n");
                $min = ($indexnya < $min or $min <= 0) ? $indexnya : $min;
                $max = ($indexnya > $max) ? $indexnya : $max;
                $total += $indexnya;
            }
        }
        fwrite(STDOUT, $min." ".$max." ".$total);
    }
    
fclose($handle);