<?php 
function get_push_up($K,$N){
	$n = ceil($K/$N);
	return $n * $N;
	
}
echo get_push_up(5,2);

?>

