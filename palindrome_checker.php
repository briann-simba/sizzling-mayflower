<?php
echo "Enter word to check ";
$input=trim(fgets(STDIN));
if ($input== strrev($input)){
    echo "palindrome detected";

}
else {
echo "not a palindrome";
}

?>