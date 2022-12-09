<?php 
/* access modifier : access modifier or access specifier od data hiding process is used to show your class properties by 
private public and protected 

public : access anywhere inside or outside of class 
private : acces inside of class only 
protected : access only its one child class 


*/

class A 
{
   public $public="I am public";
   protected $protected="I am protected";
   private $private="Hi i am private"; 
   
   public function display()
   {
     echo $this->public."<br>";
     echo $this->protected."<br>";
     echo $this->private."<br>";
   }
}
$obj=new A;
echo $obj->public; //access anywhere
echo $obj->protected; //not access
echo $obj->private; //not access 

$obj->display();
?>