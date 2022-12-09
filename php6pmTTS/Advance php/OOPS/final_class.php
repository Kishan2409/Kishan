<?php
final class a
{
    function show()
    {
        $n="hi";
        return $n;
    }
}
class b extends a
{
    function show1()
    {
        $n1="hi";
        return $n1;
    }
}
class c extends b
{
    function show2()
    {
        $n2="hi";
        return $n2;
    }
}

$obj = new c;
echo $obj->show2();
?>