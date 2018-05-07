<?php 


function fib($n){
	echo $a = 0; echo $b=1; 
	while($i <= $n) {
		echo $num = $a + $b; echo " ";
		$a = $b;
		$b = $num;
	$i++;
	}
	
		
	
}
function fib_r($n){
	if($n <= 1){
		return $n;
	}
	return fib_r($n-1) + fib_r($n-2);
}

for ($i = 0; $i < 10; $i++){  
echo fib_r($i);  
echo "\n";  
}  

?>
