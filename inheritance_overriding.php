<?php
class Fruit{
public $name;
function __construct($name){
    $this->name=$name;
}
function announce(){
    echo " This fruit is a(n) {$this->name} ";
}
}

class Mango extends Fruit{
public $weight;
function __construct($name, $weight){
    $this->weight=$weight;
    $this->name=$name;
}

function announce(){
    echo " This fruit is a {$this->weight} kg {$this->name} ";

}

}

$mango = new Mango("apple-mango", 50);
$mango->announce();
?>