<?php

function myFac($number){
    if ($number < 0){
        echo "No factorial defined for negative numbers";
        
    }
    else if ($number ==1) {
        return 1;
    }
    else {
    $fac=$number*(myFac($number-1));
    return $fac;
    }
}
echo "Enter your number ";
$input=trim((int)fgets(STDIN));
echo myFac("$input \t" );

?>