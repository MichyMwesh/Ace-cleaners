<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ACE-CLEANERS </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-warning d-none d-lg-block">
                <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-3 text-bg-warning">ACE</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-success p-0 d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>acecleaners@gmail.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+254713927050</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-facebook-f fa-sm"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">Klean</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <a href="project.html" class="nav-item nav-link"></a>

                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="login.php"><button type="button" class="btn btn-outline-info">LOGIN</button></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


<?php
include 'joinet.php';
if(isset($_POST['LOGIN'])) {

$username=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT *FROM  user WHERE username=? AND password=?";

$st=mysqli_stmt_init($conni); 
mysqli_stmt_prepare($st,$sql);  
mysqli_stmt_bind_param ($st,"ss",$username,$password);
mysqli_stmt_execute($st);


$result=mysqli_stmt_get_result($st);
if(!mysqli_fetch_assoc($result)){
    echo"incorrect";
}
else{
    header("location: index1.html?success");
    exit();
}
}
?>
        
<!doctype html> 
<html lang="en"> 
<head> 
	<!-- Required meta tags --> 
	<meta charset="utf-8"> 
	<meta name="viewport" content= 
		"width=device-width, initial-scale=1, 
		shrink-to-fit=no"> 
</head> 
<body> 

<div class="container my-4 "> 

<form action="login.php" method="post"> 
	
    <div class="form-group"> 
        <label for="username">Username</label> 
    <input type="text" class="form-control" placeholder="Username" id="username"
        name="username" aria-describedby="emailHelp" required>	 
    </div> 

    <div class="form-group"> 
        <label for="password">Password</label> 
        <input type="password" class="form-control"
        id="password" placeholder="Password" name="password" required> 
    </div> 

    <button type="submit" class=" btn btn-outline-info" name="LOGIN">LOGIN</button> 
    <p>Do you have an account?</p>
    <a class="btn-primary" href="ex.php">Register</a>
</form> 

	 
    <!-- Footer Start -->
    <div class="container-fluid bg-info text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-secondary">ACE</h1>
                </a>
            
                <h5 class="font-weight-semi-bold text-white mb-2">Opening Hours:</h5>
                <p class="mb-1">Mon – Sat, 8AM – 5PM</p>
                <p class="mb-0">Sunday: Closed</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-success mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>Moi Avenue Street, Nairobi, KENYA</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+254713927050</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>acecleaners@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-success mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="services.html"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-success mb-4">Newsletter</h4>
                <p>Thank you for being the backbone of our success, for turning challenges into opportunities, and for going above and beyond to ensure that every space we touch is not just clean but transformed into a haven of freshness and hygiene.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder=" Email">
                        <div class="input-group-append">
                            <button class="btn btn-secondary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-info text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">ACE CLEANERS</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->

	 
	 
 <!-- Back to Top -->
 <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>