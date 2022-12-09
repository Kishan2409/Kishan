<?php 
class A 
{
    public function display()
    {
        $name="I am jay"."<br>";
        echo $name;
    }
}
class B extends A 
{
    public function display1()
    {
        $name1="I am Milan"."<br>";
        echo $name1;
    }
}

class C extends B 
{
    public function display2()
    {
        $name2="I am Kishan"."<br>";
        echo $name2;
    }
}

class D extends C 
{
    public function display3()
    {
        $name3="I am Brijesh"."<br>";
        echo $name3;
    }
}

$obj=new D;
$obj->display();
$obj->display1();
$obj->display2();
$obj->display3();
?>