<?php 
class A 
{
    function add($a,$b)
    {
       $c=$a+$b;
       echo "Additions of numebrs is :".$c;  
    }
}
class B extends A{
    function add($a,$b)
    {
        $c=$a*$b;
        echo "maltipication of numbers is :".$c;
    }
}

$obj=new B;
$obj->add(50,2);
?>