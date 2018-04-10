<?php 
$arr = array(3,5);
	for($i=0;$i<sizeof($arr);$i++){
		for($j=$i+1;$j<sizeof($arr);$j++){
			$sum += $arr[$i] * $arr[$j];	
			
		}
		//$prod[] = $sum;
		//$sum = 0;		
	}
	print_r($sum);
	//print_r($prod);

?>
