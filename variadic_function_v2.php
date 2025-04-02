<?php

function addAll(){
   
   $summation =0;
   do{
    echo "Enter number ";
    $input=(int) (fgets(STDIN));
   if ($input == "end") break; 
    $summation += $input;
   }
   while ($input);
    
  

    echo $summation;
    }
    

    addAll();



    


?>