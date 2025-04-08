<?php
class Fruit{
public $name;
function __construct($name){
    $this->name=$name;
}

protected function announce(){
    echo " This fruit is a(n) {$this->name} ";
}
}

class Mango extends Fruit{

    function doTell(){
        $this->announce();
    }
}

$mango = new Mango("apple-mango");
$mango->doTell();
?>