<?php
$price=200; 
$checkindate=mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("y"));
$checkoutdate=mktime(date("H"),date("i"),date("s"),date("m"),date("d")+2,date("y"));
$diff=($checkoutdate-$checkindate)/86400;
echo "diffrence of day :".$diff."<br>";
echo "Totals bill is : Rs ".$diff*$price;

?>