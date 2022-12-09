
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

<?php
    if(!isset($_SESSION["email"]))
    { 
    ?>
<li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Account <span
class="bi bi-person"></span></a>
<ul class="dropdown-menu bg-dark">
<li><a href="#">SignUp!</a></li>
<li><a href="#">SignIn!</a></li>
</ul>
</li>

<?php 
    }
    else 
    {
    ?>

<li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Welcome :<?php echo $_SESSION["email"];?> <span
class="bi bi-person"></span></a>
<ul class="dropdown-menu bg-dark" style="max-width:180px !important">
<li><a href="#">Manage profile!</a></li>
<li><a href="logout.php" onclick="return confirm('Are you sure to Logout ?')">Logout!</a></li>
</ul>
</li>

<?php 
    }
    ?>


<li><a href="#">Contactus</a></li>
</ul>
</nav>
</div>
