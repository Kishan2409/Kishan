
<?php 
if(isset($_POST["login"]))
{
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    if($em=='kishan@gmail.com' && $pass=='kishan12')
    {
        // location is not passed message
        echo "<h1 style='color:green' align='center'>You are Logged in Succefully</h1>";
        header("refresh:3,welcome.php");
    }
    else 
    {
        echo "<h1 style='color:red' align='center'>Your email and password are wrong try again</h1>";
        header("refresh:3,register.php");
    }
}

?>