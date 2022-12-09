<?php
class a
{
    function __construct()
    {
        $name="my name is kishan";
        echo $name;
    }
}
class b  extends a
{
    function cla()
    {
        $n=" and i am learning php ";
        echo $n;
    }
}
$obj=new b;
$obj->cla();
?>