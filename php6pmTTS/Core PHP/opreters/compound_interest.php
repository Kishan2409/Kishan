<?php 
$p=100000;
$n=2;
$r=3;
//$si=$p*$n*$r/100;
$ci=$p*(pow((1+$r/100),$n));
echo "compound Interest after two years is :".$ci;

?>