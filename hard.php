<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
// fscanf($_fp,"%s",$string_1);
// fscanf($_fp,"%s",$string_2);

//OUDFRMYMAW
//AWHYFCCMQX

//2
//WYFM
//FMYW

/*
Pernyataan masalah
Mengingat dua string a dan b dengan panjang yang sama, apa string terpanjang (S) yang dapat dibangun sedemikian rupa sehingga anak kedua?
Sebuah string x dikatakan anak string y jika x dapat dibentuk dengan menghapus 0 atau lebih karakter dari y.
Misalnya, ABCD dan ABCD memiliki dua anak dengan panjang maksimum 3, ABC dan ABD. Perlu diketahui bahwa kami tidak akan mempertimbangkan ABCD 
sebagai anak umum karena C tidak terjadi sebelum D dalam string kedua.
*/

$string_1 = fgets(STDIN);
$string_2 = fgets(STDIN);

//echo $string_1." = ".$string_2;
$string_1 = strtoupper(trim($string_1));
$string_2 = strtoupper(trim($string_2));

if(strlen($string_1) <= 5000 and strlen($string_2) <= 5000 and ord($string_1) >= 65 and ord($string_2) <=90){
	$hasil_1 ="";
	$hasil_2 ="";
	for($i = 0; $i < strlen($string_2); $i++){
		$temp_char_s1	= substr($string_1,$i,1);
		$temp_char_s2	= substr($string_2,$i,1);
		
		//echo $temp_char."\n";
		$found_count_s1 = substr_count($string_2, $temp_char_s1);
		$found_count_s2 = substr_count($string_1, $temp_char_s2);
		$found_index_s1 = strpos($string_2, $temp_char_s1);
		$found_index_s2 = strpos($string_1, $temp_char_s2);
		//$index_s1	= strpos($string_2, $temp_char);



		if(strpos($hasil_1, $temp_char_s1) === FALSE){
			if($found_count_s1 > 1)
				$hasil_1 .= $temp_char_s1;
			else if ($found_count_s1 == 1 and $found_index_s1 > 0 and strpos($string_1, $temp_char_s1) > 0) 
				$hasil_1 .= $temp_char_s1;
		}
			
		if( strpos($hasil_2, $temp_char_s2) === FALSE){
			if($found_count_s2 > 1)
				$hasil_2 .= $temp_char_s2;
			else if ($found_count_s2 == 1 and $found_index_s2 > 0  and strpos($string_2, $temp_char_s2) > 0 ) 
				$hasil_2 .= $temp_char_s2;
		}
	}




	//fwrite(STDOUT, strlen($hasil)); 
	fwrite(STDOUT, $hasil_1."\n"); 
	fwrite(STDOUT, $hasil_2."\n"); 

	$buff = "";
	for($m = 0; $m < strlen($hasil_1) ; $m++){	
		for($n = 2; $n <= strlen($hasil_2) ; $n++) {
			 //echo substr($hasil_1, $m, $n )."\n";
			$buff_hasil = substr($hasil_1, $m, $n );
			if( strlen($buff_hasil) >= 2 ){
				if(strpos($hasil_2, $buff_hasil) !== false) {
					 $buff = $buff_hasil;
					if(strlen($buff_hasil) > strlen($buff) )
						$buff = $buff_hasil;
				}		
			}

			// $buff_[1][substr($hasil_1,$m,1)][] = substr($hasil_2, $n, 1);	
			// $buff_[2][substr($hasil_2,$m,1)][] = substr($hasil_1, $n, 1);	
		}
	}

	// var_dump(strlen($buff));
	fwrite(STDOUT,strlen($buff));

}	
fclose($_fp);
?>