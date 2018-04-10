<?php 
function check_no($no,$n){
	$val = get_all_prime_factors($no);
	print_r($val);
	arsort($val);
	if($val[0] >= $n){
		echo "Test Passed";	
	} else {
		echo "Test Failed";	
	}

}

function get_all_prime_factors($no){
	for($i = 2; $i < ($no/2); $i++){
		if($no % $i == 0){
			if(is_prime($i)){
			$arr[] = $i; }
		}
	}
	return $arr;
}

function is_prime($n){
	if($n == 2){
		return true;
	} else {
	for($i = 2; $i < ($n/2); $i++){
			if($n % $i == 0){
				return 0;
			} else {
				return true;		
			}
				
	}
}
}
check_no(55,11);

?>

