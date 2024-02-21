<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ACE CLEANERS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Cleaning Company Website Template" name="keywords">
        <meta content="Cleaning Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header bg-success">
                <div class="container-fluid">
                    <div class="header-top row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand">
                                <a href="index.html">
                                    ACE
                                    <!-- <img src="img/logo.png" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+254713927050</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>acecleaners@gmail.com</a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                       
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg  navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="index.php" class="nav-item nav-link active">Home</a>
                                        <a href="about.html" class="nav-item nav-link">About</a>
                                        <a href="service.html" class="nav-item nav-link">Service</a>
                                        <a href="portfolio.html" class="nav-item nav-link">Project</a>
                                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                                       
                                        </div>
                                        <a href="logout.php"><button type="button" class="btn btn-info">LOGOUT</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php

     include  ("dconn.php");
     
    if(isset($_POST['SUBMIT'])) {
    echo '<script>alert("executing...");</script>';
    
    // Retrieve form data
    $name = $_POST["name"];
    $number = $_POST["number"];
    $service = $_POST["service"];
    $county = $_POST["county"];
    $schedule =$_POST["schedule"];
    $rooms =$_POST["rooms"];
    $bathrooms =$_POST["bathrooms"];

    // SQL query to insert data into the 'category' table
    $query = "INSERT INTO category (name, email, service, county, schedule, rooms, bathrooms) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Initialize and prepare a statement
    $stmt = mysqli_stmt_init($conne);
    mysqli_stmt_prepare($stmt, $query);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "sssssss", $name, $email, $service, $county, $schedule, $rooms, $bathrooms);
    mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt);

    // Debugging: Display form data and any potential MySQL error

    // Display success message using JavaScript
    echo "<script>alert('Data has been successfully submitted!');</script>";
}
?>

                    
                    <div class="hero row align-items-center">
                        <div class="col-md-7">
                            <h2 class="text-primary">Best & Affordable</h2>
                            <h2 class="text-info"><span>Cleaning</span> Services </h2>
                            <p></p>
                      
                        </div>
                        <div class="col-md-5">
                            <div class="form">
                                <h3>Choose A Category</h3>
                                <form>
                                    <input class="form-control" type="text"  maxlength="15"  name="name" placeholder="Name" required>
                                    <input class="form-control" type="number" maxlength="10" name="number" placeholder="Phone Number" required>
                                    <div class="control-group">
                                        <select class="custom-select">
                                            <option selected required>Choose a service</option>
                                            <option value="1">House Mopping</option>
                                            <option value="2">Dishes Cleaning</option>
                                            <option value="3">Clothes  Cleaning</option>
                                            <option value="3">Carpet Cleaning</option>
                                        </select>
                                    </div>

                                    <div class="control-group">
                                        <select class="custom-select">
                                            <option selected required>Choose A County</option>
                                            <option value="1">Nairobi</option>
                                            <option value="2">Kajiado</option>
                                            <option value="3">Kiambu</option>
                                            <option value="3">Muranga</option>
                                        </select>
                                    </div>

                                    <div class="control-group">
                                        <select class="custom-select">
                                            <option selected required>Choose A Schedule</option>
                                            <option value="1">One-time</option>
                                            <option value="2">Daily</option>
                                            <option value="3">Weekly</option>
                                            <option value="3">Monthly</option>
                                        </select>
                                    </div>

                                    <div class="control-group">
                                        <select class="custom-select">
                                            <option selected required>Choose Number Of Rooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>

                                    <div class="control-group">
                                        <select class="custom-select">
                                            <option selected required>Choose Number Of Bathrooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    <textarea class="form-control" placeholder="minimum amount is sh400" required></textarea>

                                    <div><button class="btn" type="submit">SUBMIT</button></div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
            
            
            
            <!-- Pricing Plan Start -->
            <div class="price">
                <div class="container">
                    <div class="section-header">
                        <p class="text-primary">PRICING PLAN</p>
                        <h2 class="text-dark">SPECIAL CHARGES</h2>
                    </div>
                    <div class="row ">
                        <div class="col-md-4 ">
                            <div class="price-item">
                                <div class="price-header bg-success">
                                    <div class="price-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Standard</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small></small>1500</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>3 Bedrooms cleaning</li>
                                            <li>2 Bathrooms cleaning</li>
                                            <li>1 Living room Cleaning</li>
                                            
                                     
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href=""><i class="fa fa-shopping-cart"></i>BOOK</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="price-item featured-item ">
                                <div class="price-header bg-success">
                                    <div class="price-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Premium</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small></small>2500</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>5 Bedrooms cleaning</li>
                                            <li>3 Bathrooms cleaning</li>
                                            <li>2 Living room Cleaning</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href=""><i class="fa fa-shopping-cart"></i>BOOK</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="price-item">
                                <div class="price-header bg-success">
                                    <div class="price-icon">
                                        <i class="fa fa-gift"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Enterprise</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small></small>3000</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>8 Bedrooms cleaning</li>
                                            <li>5 Bathrooms cleaning</li>
                                            <li>3 Living room Cleaning</li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href=""><i class="fa fa-shopping-cart"></i>BOOK</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing Plan End -->
<

            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Moi Avenue Street, Nairobi, KENYA</p>
                                <p><i class="fa fa-phone-alt"></i>+254713927050</p>
                                <p> <a class="text-white" href="mailto:info@example.com"><i class="fa fa-envelope text-white"></i>acecleaners@gmail.com</p></a>
                                <div class="footer-social">
                                    
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Links</h2>
                                <a href="about.html">About Us</a>
                                <a href="service.html">Our Services</a>
                                <a href="portfolio.html">Our Projects</a>

                                <a href="cont.php" class="nav-item nav-link">Contact</a>
                            
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="portfolio.html">Ongoing Project</a>
                                <a href="contact.html">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-form">
                                <h2>Stay Updated</h2>
                                <p>
                                    Incase of any inquiry, feel free to send an email to us.
                                </p>
                                <input class="form-control" placeholder="Email here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Help & FQAs</a>
                        <a href="">Contact us</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy;  All Right Reserved.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
