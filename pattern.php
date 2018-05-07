<?php
$t=1;
for($i = 1; $i < 5; $i++){
	$k = 0; 
	for($j = 0; $j < $i ; $j++){
		echo $t + $k;
		$k++;		
	}
	
	echo "</br>";
	$t = $i;
}


?>


/*

1
12
234
3456



*/

