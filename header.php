Welcome to my website!<br /> 
<?php 
	$test = 1;
  if($test){ 
   echo "You're in!"; 
  } 
  else{ 
    header('Location: http://www.mysite.com/someotherpage.php'); 
  } 
?>

