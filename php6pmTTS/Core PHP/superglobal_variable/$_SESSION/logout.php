<?php 
session_start();
unset($_SESSION["email"]);
session_destroy();
echo "<h1 style='color:green' align='center'>You are Logout  Succefully</h1>";
header("refresh:2,register.php");

?>