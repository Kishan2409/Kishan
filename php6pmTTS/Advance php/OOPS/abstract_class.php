<?php
abstract class a
{
    public $nm="kishan";
    function show()
    {
        echo $this->nm;
    }
}
class b extends a
{

    function show1()
    {
        echo" is a good boy.";
    }
}
$obj = new b;
$obj->show();
$obj->show1();
?>