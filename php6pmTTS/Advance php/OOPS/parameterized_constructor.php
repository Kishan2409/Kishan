<?php 
class A 
{
    public function __construct($fname,$lname) //magic method
    {
        echo $f="My firstname is :".$fname."<br>";
        echo $l="My lastname is :".$lname."<br>";

    }
}
$obj=new A("Kishan","patel");

?>