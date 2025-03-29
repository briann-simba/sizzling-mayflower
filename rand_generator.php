<?php

echo "How many random numbers do you want? ";
$input=((int)trim(fgets(STDIN)));

for ($i = 0; $i < $input; $i++) {
    $r=rand();
    echo "$r \n" ;
}

?>