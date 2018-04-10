<?php
function twin_prime($n){
	for($i = 2; $i<$n; $i++){
		if(is_prime($i)){
			$arr[] = $i; 
		}
	}
	foreach($arr as $k => $v){
		if($arr[$k+1] - $arr[$k] == 2){
			echo '('.$arr[$k].','.$arr[$k+1].')';	
		}	
	}
}
function is_prime($dig){
	for($j = 2; $j<$dig; $j++){
		if($dig % $j == 0){
			return 0; 
			break;
		} 
	}
	return 1;
	
}

twin_prime(25);

//echo is_prime(25);
?>


