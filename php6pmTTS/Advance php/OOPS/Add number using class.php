<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Add numbers</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body align="center">
    <h1>Enter Number And Get Sum of Two Numbers</h1>
    <form method="post" align="center">
        <input type="text" name="n1" placeholder="Pls Enter Number1..."><br><br>
        <input type="text" name="n2" placeholder="Pls Enter Number2..."><br><br>
        <input type="submit" name="ad" value="ADD">
    </form>
    <?php
    if(isset($_POST['ad']))
    {
        class Add
        {
            function show()
            {
                $n1=$_POST['n1'];
                $n2=$_POST['n2'];
                $total=$n1+$n2;
                echo "<br> You enter Number one :".$n1."<br>";
                echo "You enter Number two :".$n2."<br>";
                echo "Your Ans is ".$total;
            }
        }
        $obj=new Add;
        $obj->show();
    }
     
    ?>
</body>
</html>