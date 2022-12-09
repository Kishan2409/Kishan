<?php 
date_default_timezone_set("Asia/Calcutta");
$today=mktime(date("H"),date("i"),date("s"),date("m")+3,date("d")+25,date("y")+2);
//echo "today date is :".date("d/m/y",$today)."<br>";
//echo "Tommarow is :".date("d/m/y",$today);

echo "Tommarow is :".date("d/m/y H:i:s a",$today);
?>