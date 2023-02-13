<?php
$f=fopen("ajex.txt",'w+') or die("File Does not Exits");
if($f)
{
    echo("File create successful");
}
else
{
    echo("File not create somthing wrong");
}

?>