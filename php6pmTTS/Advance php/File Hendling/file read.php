<?php
$f=fopen("ajex.txt",'r+') or die("File Does not Exits");

echo (fgets($f));
fclose($f);
?>