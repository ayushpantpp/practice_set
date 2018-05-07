<?php 
$a = [2,3,4,5,6];
$max = $a[0];$smax = $a[0];
for($i = 0 ; $i < sizeof($a); $i++){
	if($a[$i] > $max){
		$smax = $max;
		$max = $a[$i];
	} 
	if($max>$a[$i]&& $smax<$a[$i]){
		$smax = $a[$i];
	}
}
echo $max; echo "<br>";
echo $smax;echo "<br>";

$n_max = $a[0];
for($i = 0 ; $i < sizeof($a); $i++){
	if($a[$i] > $n_max){
		$n_max = $a[$i];
	} 
}

echo $n_max;


$a = "VeryLongString"; 
//return char that appears only once.
$n_a = str_split($a);
$counted_array = array_count_values($n_a);
function array_count_values1($arr){
	$count = 0;
	foreach($arr as $k=>$v){
		for($i = 0; $i < sizeof($arr); $i++){
			if($arr[$i] == $v){
				$count++;			
			}
			$new_array[$v] = $count;
		}
		$count = 0;
	}
	 return $new_array;
}
$new_array = array_count_values1($n_a);

foreach($new_array as $k=>$v){
	if($v == 1){
		echo $k." - Repeated Once<br>";	
	}
}




?>
