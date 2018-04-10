<?php 

//swapping array as by no 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$array = [2, 5, 2, 8, 5, 6, 8, 8];

function array_by_frequecny($array)
	{
	for($i = 0 ; $i < sizeof($array); $i++){
		foreach($array as $a){
			if($array[$i] == $a){
				$new_array[] = $a;
				unset($array[$i]);	
			}		
		
		}
	}
	print_r($new_array);
}
array_by_frequecny($array);


?>
