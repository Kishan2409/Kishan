<?php
$f = fopen("kishan.txt", 'w') or die("File Does not Exist");
$f1 = fopen("kishan1.txt", 'w') or die("File Does not Exist");

$f1 = "kishan1.txt";
unlink($f1);
if($f1)
{
    echo ("file remove successfully");
}
?>