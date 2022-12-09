
<?php 
error_reporting(0);
session_start();
if(isset($_POST["login"]))
{
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    if($em=='kishan@gmail.com' && $pass=='kishan12')
    {
        // location is not passed message
        $_SESSION["email"]=$_POST["email"];
        echo "<h1 style='color:green' align='center'>You are Logged in Succefully</h1>";
        header("refresh:2,welcome.php");
    }
    else 
    {
        echo "<h1 style='color:red' align='center'>Your email and password are wrong try again</h1>";
        header("refresh:2,register.php");
    }
}

?>