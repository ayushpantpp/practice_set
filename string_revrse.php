<?php
// PHP function to in place reverse a string 
// without using library functions
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function Reverse1($str){
    $new  = explode(' ', $str);
	$n = sizeof($new);
	for($i = 0; $i < sizeof($new);$i++){
		$new_arrar[$i] = $new[$n - 1];
		$n--;
	}
	echo implode(' ',$new_arrar);  
}

 

$str = "getting good at coding needs a lot of practice";
print_r(Reverse1($str));
?>
