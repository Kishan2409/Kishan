<?php 
class A 
{
    public function display()
    {
        $name="I am jay"."<br>";
        echo $name;
    }
}
class B 
{
    public function display1()
    {
        $name1="I am Milan"."<br>";
        echo $name1;
    }
}


class C extends A,B 
{
    public function display2()
    {
        $name2="I am Kishan"."<br>";
        echo $name2;
    }
}


$obj=new C;
$obj->display();
$obj->display1();
$obj->display2();

?>