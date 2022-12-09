<?php 
// destrucutor is used to remove property of created constructor or remove scope of constructor object properties 
class A 
{
    public $name;
    public $color;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function __destruct()
    {
        echo "The fruit is {$this->name}.";

    }
}
$obj=new A("Guvava");


?>