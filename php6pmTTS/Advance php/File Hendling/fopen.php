<?php
$file = fopen('hello.txt', 'r+') or die('file doesnot exit');
if($file)
{
    echo ("File succefully Opened");
}
else
{
    echo ("Somthing went wrong");
}
?>