<?php 
class A 
{
    public function display()
    {
        $name="I am KISHAN"."<br>";
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

$obj=new B;
$obj->display();
$obj->display1();
?>