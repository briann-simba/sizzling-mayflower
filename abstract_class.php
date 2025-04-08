<?php
abstract class Employee{

    abstract protected function prefixName ($name);
}
class ChildEmployee extends Employee{
    function prefixName($name)
     {
        if ($name=="John Doe") $prefix="Mr";
        elseif ($name=="Jane Doe") $prefix="Mrs";
        else $prefix="";

         return "{$prefix} {$name}";}
}

$emp1=new ChildEmployee();
echo "{$emp1->prefixName("John Doe")} \n";
echo "{$emp1->prefixName("Jane Doe")} \n";
echo "{$emp1->prefixName("Ndidi")} \n";
?>