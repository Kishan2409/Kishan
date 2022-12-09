<?php
class a
{
    function show()
    {
        $n="hi <br>";
        return $n;
    }
}
class b extends a
{
    function show1()
    {
        $n1="how <br>";
        return $n1;
    }
}
final class c extends b
{
    function show2()
    {
        $n2="are you <br>";
        return $n2;
    }
}

$obj = new c;
echo $obj->show();
echo $obj->show1();
echo $obj->show2();
?>