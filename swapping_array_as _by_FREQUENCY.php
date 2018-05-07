<?php 

//swapping array as by FREQUENCY 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$array = [2, 5, 2, 8, 5, 6, 8, 8];

function array_by_frequecny($array){
	$cnt = 0;
	$array_n = array_count_values($array);
	arsort($array_n);
	print_r($array_n);
	foreach($array_n as $k => $v){
			for($i = 0; $i < $v; $i++){
				$new[] = $k;
			}
	}
	
	echo implode(',',$new);

}

array_by_frequecny($array);

?>
