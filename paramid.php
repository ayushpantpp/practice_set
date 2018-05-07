<?php
$str1 = floor(10/2);
for($i = 0;$i <= 10/2; $i++,$k=0){
	for($str = $str1 ; $str > 0; $str--){
		echo "&nbsp&nbsp";
		
	}
	for($s = 2*$i+1 ; $s > 0; $s--){
		echo "*";
		
	}
	$str1 = $str1 - 1;
	
	echo "</br>";
}
$no_of_star = (20/2);
for($l=0;$l<=(20/2);$l++){
	for($spc=$l;$spc>0;$spc--){
		echo "&nbsp&nbsp";
	}
	for($str = $no_of_star; $str>0; $str--){
		echo "*";
	}
	$no_of_star = $no_of_star-2;
	echo "</br>";
}


?>

   

