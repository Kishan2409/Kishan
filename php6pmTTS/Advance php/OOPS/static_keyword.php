<?php 
// Static methods can be called directly - without creating an instance of the class first. Static methods are declared with the static keyword:
// static method can not be constructor
// static method can be access by another class or inherited by another class


class A 
{
    public static function display()
    {
        echo "Hi this is Brijesh"."<br>";
    }
}
class B extends A 
{
    public  static function display1()
    {
        echo "Hi this is Milan";
    }
}
// $obj=new B;
// $obj->display();
// $obj->display1();
A::display();
B::display1(); // A::display() is a scope resulation operator(::) i.e used to access a static method without called object



?>