<?php
include('Connection/Connection.php');
?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HIRE TECH</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="Template/Main/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="Template/Main/lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="Template/Main/lib/animate/animate.min.css" rel="stylesheet">
        <link href="Template/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="Template/Main/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="Template/Main/lib/slick/slick.css" rel="stylesheet">
        <link href="Template/Main/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="Template/Main/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
           <!-- Top Bar Start -->
           <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="">
                                    <h1>HIRE TECH</h1>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>Mon - Fri, 8:00 - 9:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+91 8075501396</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>hiretech@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="Template/Main/#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                           <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sign Up</a>
                                    <div class="dropdown-menu">
                                        <a href="Guest/Labour.php" class="dropdown-item">Worker</a>
                                        <a href="Guest/User.php" class="dropdown-item">User</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="Guest/Login.php">Sign In</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->


            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Template/Main/img/bg3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight"></p>
                            <h1 class="animated fadeInLeft">Professionals at Your Service, On Your Schedule</h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="Template/Main/img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Professional Builder</p>
                            <h1 class="animated fadeInLeft">We Build Your Home</h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="Template/Main/img/Paintning.png" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft">For Your Dream Builds</h1>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->


            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                               
                                <div class="feature-text">
                                    <h3>Expert Worker</h3>
                                    <p>We provide high expeienced workers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                
                                <div class="feature-text">
                                    <h3>Quality Work</h3>
                                    <p>Provide 100% resposibility , Fast Loading Time and High Performance · 
                                , Extremely Helpful Customer Support ,
                                         Quick Adaptation to Employers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                
                                <div class="feature-text">
                                    <h3>24/7 Support</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="Template/Main/img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Welcome to HIRE TECH</p>
                                <h2>10 Years Experience</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    We have 10 years of experience in firm  and we have assisted 45 repeated clients in increasing their capital by an average of 15% every year. We trained them in providing the most helpful experience to our customers.  We aim to integrate our individualized approach to helping the clients”
                                <p>
                                
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up"><?php
														$sel = "select count(labour_id) as id from tbl_labour";
														$res = $conn->query($sel);
                                                        $data = $res->fetch_assoc(); 
														echo $data["id"];
                                                        ?></h2>
                                        <p>Expert Workers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up"><?php
														$sel = "select count(user_id) as id from tbl_user";
														$res = $conn->query($sel);
                                                        $data = $res->fetch_assoc(); 
														echo $data["id"];
                                                        ?></h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <!-- <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">890</h2>
                                        <p>Running Projects</p>
                                    </div>
                                </div>
                            </div> -->
                            <h6 align="center">Say goodbye to endless searching.</h6>
                            <h3 align="center"><b>Build your home with us.</b></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Our Services</p>
                        <h2>We Provide Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="Template/Main/img/service-1.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Electrical works </h3>
                                    <a class="btn" href="Template/Main/img/service-1.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="Template/Main/img/service-2.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Ceiling Works</h3>
                                    <a class="btn" href="Template/Main/img/service-2.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="Template/Main/img/service-3.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Painting</h3>
                                    <a class="btn" href="Template/Main/img/service-3.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="Template/Main/img/service-4.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Piping work</h3>
                                    <a class="btn" href="Template/Main/img/service-4.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="Template/Main/img/service-5.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3> Wood Carpentry</h3>
                                    <a class="btn" href="Template/Main/img/service-5.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="Template/Main/img/service-6.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Tile Setting</h3>
                                    <a class="btn" href="Template/Main/img/service-6.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->

           
            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>121 street ,muvattupuzha</p>
                                <p><i class="fa fa-phone-alt"></i>+91 8075501396</p>
                                <p><i class="fa fa-envelope"></i>hiretech@.com</p>
                                <!-- <div class="footer-social">
                                    <a href="Template/Main/"><i class="fab fa-twitter"></i></a>
                                    <a href="Template/Main/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="Template/Main/"><i class="fab fa-youtube"></i></a>
                                    <a href="Template/Main/"><i class="fab fa-instagram"></i></a>
                                    <a href="Template/Main/"><i class="fab fa-linkedin-in"></i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="#">Ceiling Works</a>
                                <a href="#">House Renovation</a>
                                <a href="#">Tile Setting</a>
                                <a href="#">Wood Carpentry</a>
                                <a href="#">Painting</a>
                                <a href="#">Piping work</a>
                                <a href="#">Electric work</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="#">About Us</a>
                                <a href="#">Contact Us</a>
                                <a href="#">Our Team</a>
                                <a href="#">Projects</a>
                                
                            </div>
                        </div>
                        
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy policy</a>
                       
                        <a href="#">Help</a>
                        <a href="#">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">HireTech</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="#">Hire Tech</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="   #" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="Template/Main/lib/easing/easing.min.js"></script>
        <script src="Template/Main/lib/wow/wow.min.js"></script>
        <script src="Template/Main/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="Template/Main/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="Template/Main/lib/lightbox/js/lightbox.min.js"></script>
        <script src="Template/Main/lib/waypoints/waypoints.min.js"></script>
        <script src="Template/Main/lib/counterup/counterup.min.js"></script>
        <script src="Template/Main/lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="Template/Main/js/main.js"></script>
    </body>
</html>
