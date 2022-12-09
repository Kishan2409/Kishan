<?php 
require_once("header.php");
require_once("navbar.php");
if(!isset($_SESSION["email"]))
{
header("location:register.php");
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script>

<script src='main.js'></script>
</head>

<body>

<!-- create for register form -->
<div class="container mt-5">
            <div class="row">
                <div class="col-md-5 bg-dark">
                    <h1 class="text-white p-3">Welcome to My Profile!</h1>
                    <p class="text-white p-2">Login with flipkart we provides 24x7 hrs services and good offers also so hurry up to create your account with us</p>
                    <p><img src="images/login.png" class="img-fluid"></p>
                </div>
                <div class="col-md-7">
                  
                  <p>Welcome to my Profile we are hard work to comming Soon!</p>
                </div>
            </div>
</div>



    <!-- footer start here -->

    <div class="container-fluid footer p-4 bg-black mt-5">


    </div>


            

<!-- modal create for login form -->
<div class="modal fade" id="login-load" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-5 bg-dark">
                    <h1 class="text-white p-3">Login</h1>
                    <p class="text-white p-2">Login with flipkart we provides 24x7 hrs services and good offers also so hurry up to create your account with us</p>
                    <p><img src="images/login.png" class="img-fluid"></p>
                </div>
                <div class="col-md-7">
                    <form method="post" class="p-5">
                        <div class="from-group mt-5 p-2">
                            <input type="text" name="email" placeholder="Enter email/mobile number" required class="form-control email">
                        </div>
                        <div class="from-group mt-1 p-2">
                            <input type="password" name="pass" placeholder="Enter Password" required class="form-control password">
                            <p class="float-end mt-3"><a href="#">Forget Password ?</a></p>
                        </div>

                        <div class="form-group mt-5 p-2">
                            <p>By continuing, you agree to Flipkart's <a href="#">Terms of Use and Privacy Policy.</a></p>
                        </div>
                        <div class="form-group mt-3 p-2">
                            <input type="submit" name="login" id="btn-log" class="btn btn-sm" value="Login">
                        </div>

                        <div class="form-group mt-1 p-2">
                            <p>Don't have an account <a href="register.html">Create your account ?</a></p>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
 
</body>
</html>