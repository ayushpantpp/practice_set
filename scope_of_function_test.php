<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function A(){
	echo "A";
	function B(){
		echo "B";
	}
		function C(){
		echo "C";
	}
}

A();
B();
C();
    ?>

