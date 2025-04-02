<?php

class Car{
public $color;
public $make;

public function __construct ($color,$make){
$this->color=$color;
$this->make=$make;
}


}
echo "Input vehicle color ";
$col=trim(string: fgets(STDIN));
echo "Input vehicle make ";
$make=trim(string: fgets(STDIN));
$myCar=new Car ($col,$make);

foreach ($myCar as $x=>$y){
echo "$x:$y \n";
}

?>  