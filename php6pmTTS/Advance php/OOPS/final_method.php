<?php
class A 
{
    final function add($a,$b)
    {
     
       $c=$a+$b;
       echo "Additions of numebrs is :".$c;  
    }
}

class B extends A 
{
    function add($a,$b)
    {
       $c=$a*$b;
       echo "Multiplications of numebrs is :".$c;  
    }
}

$obj=new B;
$obj->add(5,2);
?>