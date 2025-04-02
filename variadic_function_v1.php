<?php

function addAll($nums){
    // $summation=0;
    // foreach ($nums as $y ){
    // if (!is_int($y)) echo "Please enter integers only!";
    // break;
    
//}
    $summation=array_sum($nums);
    return $summation;
    }
    
echo "enter numbers,(comma-separated) ";
    $input= explode(",",trim(fgets(STDIN)));
   // var_dump($input);
    echo (addAll($input));



    


?>