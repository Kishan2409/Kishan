<?php 
/* 
 Traits : traits is used to access or acces inhritance in easy way we can used multiple inheritance or access multiple parent class properties by its child class there we used traits
*/ 
trait A 
{
    public function test()
    {
        echo "Hi i am brijesh"."<br>";
    }
}
trait B 
{
    public function test1()
    {
        echo "Hi i am Jay"."<br>";
    }
}

trait C 
{
    public function test2()
    {
        echo "Hi i am Kishan";
    }
}
class D 
{
    use A,B,C;
}
$obj=new D;
$obj->test();
$obj->test1();
$obj->test2();
  
?>