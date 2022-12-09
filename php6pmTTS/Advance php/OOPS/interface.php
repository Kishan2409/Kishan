<?php 
interface A 
{
    public function display1();
}

interface B
{
    public function display2();
}

interface C 
{
    public function display3();
}

class D implements A,B,C 
{
    public function display1()
    {
        $name1="Hi jay"."<br>";
        echo $name1;
    }
    
    public function display2()
    {
        $name2="Hi Kishan"."<br>";
        echo $name2;
    }
    
    public function display3()
    {
        $name3="Hi Milan"."<br>";
        echo $name3;
    }
}

$obj=new D;
$obj->display1();
$obj->display2();
$obj->display3();
?>