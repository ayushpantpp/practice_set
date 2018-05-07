<?php 
function getSeed($string)
{
   return ++$string;
}

echo $result = getSeed('ZAYZ');

?>
