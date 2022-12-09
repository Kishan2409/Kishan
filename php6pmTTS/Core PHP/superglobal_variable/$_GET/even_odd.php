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

    <?php 
     if(isset($_GET["sub"]))
     {
        $n=$_GET["num"];
        if($n%2==0)
        {
            echo "<h2 align='center' style='color:green'>Number is even</h2>";
        }
        else 
        {
            
            echo "<h2 align='center' style='color:green'>Number is Odd</h2>";
        }
     }
    ?>
    <center>
    <form method="get">
        Enter a number :<input type="text" name="num" placeholder="Enter Number *" required>
        <br><br>
        <input type="submit" name="sub" value="Check >>">
    </form>
    </center>
    
</body>
</html>