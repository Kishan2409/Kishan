<?php
if(isset($_POST["ck"]))
{
   $n1=$_POST["n1"];
   $n2=$_POST["n2"];
   $n3=$_POST["n3"];

   if($n1>$n2 && $n1>$n3)
   {
       echo "<h1 align='center'>N1 is max numbers</h1>";
   }
   elseif($n2>$n1 && $n2>$n3)
   {
       echo "<h1 align='center'>N2 is max numbers</h1>";
   }
 
   else 
   {
       echo "<h1 align='center'>N3 is max numbers</h1>";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
        <h3>:: check max numbers ::</h3>
    <form method="post">
        Enter N1 number :<input type="text" name="n1" placeholder="N1 numbers" required>
        <br><br>
        Enter N2 number :<input type="text" name="n2" placeholder="N2 numbers" required>
        <br><br>
        Enter N3 number :<input type="text" name="n3" placeholder="N3 numbers" required>
        <br><br>
        <input type="submit" name="ck" value="check >>">
    </form>
    </center>
</body>
</html>