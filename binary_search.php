<?php 
$array = [22,43,23,24,45,3,7,8,9];
$s_v = 43;
sort($array);
print_r($array);

function binary_search($array,$first,$mid,$s_v){
		echo $first.'-'.$mid.'</br>new';
		if($array[$mid] == $s_v){
			die('yes');
		}
		if($array[$mid]<$s_v){
			binary_search($array,$mid+1,sizeof($array),$s_v);	
		} 
		if($array[$mid]>$s_v){
			binary_search($array,$first,$mid-1,$s_v);			
		}
	}

binary_search($array,0,floor(sizeof($array)/2),$s_v); 


?>

