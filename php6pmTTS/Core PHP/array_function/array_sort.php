<?php 
$arr=array("php","asp.net","brijesh","python","oracle");
asort($arr);
foreach($arr as $value)
{
    echo "Values of array after sort :".$value."<br>";
}
?>