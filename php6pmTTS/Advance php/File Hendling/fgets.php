<?php 
$file=fopen("hello.txt","r") or die("file is not exist");
echo fgets($file,25);
fclose($file);
?>