<?php 
$arr = array(20, 10, 25, 30, 40);
	$no = 2; $cnt = 1;
	foreach($arr as $k=>$v){
		if($v < $arr[$k+1]){
			if($cnt <= $no){
				unset($arr[$k]);
			}
		$cnt ++;
		}
	}
	print_r($arr);
?>
