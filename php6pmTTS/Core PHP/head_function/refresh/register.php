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
<?php 
if(isset($_POST["login"]))
{
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    if($em=='kishan@gmail.com' && $pass=='kishan12')
    {
        // location is not passed message
        echo "<h1 style='color:green'>You are Logged in Succefully</h1>";
        header("refresh:3,welcome.php");
    }
    else 
    {
        echo "<h1 style='color:red'>Your email and password are wrong try again</h1>";
        header("refresh:3,register.php");
    }
}

?>
<!-- header start here -->
<div class="container-fluid header p-5">
<div class="row">
<div class="col-md-3">
<b>Call us :<span class="bi bi-telephone"></span> (+91)-999-80038-79</b>
</div>

<div class="col-md-5">
    <b><input type="text" name="search" placeholder="Search a products and many More!" class="form-control"></b>
</div>
<div class="col-md-4">
    <b>
        <button type="button" class="btn btn-sm btn-dark p-2" id="log-btn" data-bs-toggle="modal" data-bs-target="#login-load">Login</button>
        <i class="bi bi-facebook"></i>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-github"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-whatsapp"></i>
        <i class="bi bi-cart"></i>Cart <span class="badge badge-lg bg-danger">0</span>
    </b>
</div>
</div>
</div>

<div class="container-fluid bg-dark text-white p-1">
<nav class="navbar">
<a href="#" class="navbar-brand text-white"><b>Flipkart</b></a>
<ul>
<li><a href="#"><span class="bi bi-house"></span> Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Events</a></li>
<li><a href="#">Products</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="#">feedback</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Account <span
class="bi bi-person"></span></a>
<ul class="dropdown-menu bg-dark">
<li><a href="#">SignUp!</a></li>
<li><a href="#">SignIn!</a></li>
</ul>
</li>
<li><a href="#">Contactus</a></li>
</ul>
</nav>

</div>



<!-- create for register form -->
<div class="container mt-5">
            <div class="row">
                <div class="col-md-5 bg-dark">
                    <h1 class="text-white p-3">Create Account with us!</h1>
                    <p class="text-white p-2">Login with flipkart we provides 24x7 hrs services and good offers also so hurry up to create your account with us</p>
                    <p><img src="images/login.png" class="img-fluid"></p>
                </div>
                <div class="col-md-7">
                    <form method="post" class="p-5">
                        <div class="from-group mt-1 p-2">
                            <input type="text" name="email" placeholder="Enter email/mobile number" required class="form-control email">
                        </div>
                        <div class="from-group mt-1 p-2">
                            <input type="password" name="pass" placeholder="Enter Password" required class="form-control password">
                         
                        </div>
                     
                        <div class="from-group mt-1 p-2">
                            <input type="password" name="cpass" placeholder="Enter Confirm Password" required class="form-control password">
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <input type="file" name="image" placeholder="upload image" required class="form-control password">
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <input type="text" name="phone" placeholder="Enter  Mobile" required class="form-control password">
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <textarea  name="address" placeholder="Enter Address" required class="form-control password"></textarea>
                         
                        </div>

                        <div class="from-group mt-1 p-2">
                            <select  name="state" placeholder="Enter state" required class="form-control password">
                              <option value="">-select state-</option>
                              <option value="">Gujrat</option>
                            </select>
                        </div>
                        <div class="from-group mt-1 p-2">
                            <select  name="city" placeholder="Enter city" required class="form-control password">
                              <option value="">-select city-</option>
                              <option value="">Rajkot</option>
                            </select>
                        </div>
                        <div class="form-group mt-1 p-2">
                            <p>By continuing, you agree to Flipkart's <a href="#">Terms of Use and Privacy Policy.</a></p>
                        </div>
                        <div class="form-group mt-3 p-2">
                            <input type="submit" name="register" id="btn-log-register" class="btn btn-sm" value="Register">
                            <input type="reset" name="reset" id="btn-log-reset" class="btn btn-sm" value="Reset">
                        </div>

                        <div class="form-group mt-1 p-2">
                            <p>Already have an account <a href="#" data-bs-toggle="modal" data-bs-target="#login-load">Create Login here ?</a></p>
                        </div>
                    </form>
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