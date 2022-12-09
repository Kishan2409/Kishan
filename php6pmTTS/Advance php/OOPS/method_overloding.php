<?php 
class A 
{
    function add($a,$b)
    {
      
       $c=$a+$b;
       echo "Additions of numebrs is :".$c;  
    }
}

class B extends A 
{
    function add($d,$e,$f)
    {
      
       $g=$d*$e*$f;
       echo "Multiplications of numebrs is :".$g;  
    }
}

$obj=new B;
$obj->add(5,2,3);
?>