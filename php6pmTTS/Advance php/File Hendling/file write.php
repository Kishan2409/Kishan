<?php
$f = fopen("ajex.txt", "w+") or die("File does not exist");

$wr = "Hello! What are you Doning friend ?";
fwrite($f, $wr);

echo fgets($f);
fclose($f);

?>