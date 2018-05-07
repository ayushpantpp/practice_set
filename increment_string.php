<?php 

function GetNextPrefix($prefixToIncrement)
{
    $digits = str_split($prefixToIncrement);
    for($i = sizeof($digits) - 1; $i >= 0; --$i)
    {
        if ($digits[$i] == 'Z')
        {
            $digits[$i] = 'A';
        }
        else
        {
            ++$digits[$i];
		break;  //error here
        }
    }
    return implode('',$digits);
}

echo GetNextPrefix('AABZ');
?>
