<?php

//$handle = New Datetime("07:05:45PM");

//echo $handle->format("G:i:sa");	
//echo $handle->format("H:i:s");


$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$time);

//echo $time;


$waktu = New Datetime($time);;


echo $waktu->format("H:i:s");	

fclose($handle);	
?>