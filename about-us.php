<?php

require './config/function.php';

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.voidcoders.com/htmldemo/hexa/main-files/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Apr 2024 17:34:50 GMT -->

<head>

        <meta charset="utf-8">
        <title>About Us | Hexa Cleaning Agency</title>
        <meta name="description" content>
        <meta name="author" content>
        <meta name="keywords" content>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/jquery-ui.css">

        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

        <link rel="stylesheet" href="assets/css/font-awosome.css">

        <link rel="stylesheet" href="assets/flat-font/flaticon.css">
        <link rel="stylesheet" href="assets/icomoon/style.css">
        <link rel="stylesheet" href="assets/icomoon/demo-files/demo.css">

        <link rel="stylesheet" href="assets/css/ticker.min.css">

        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <link rel="stylesheet" href="assets/css/sm-core-css.css">
        <link rel="stylesheet" href="assets/css/sm-mint.css">
        <link rel="stylesheet" href="assets/css/sm-style.css">

        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="shortcut icon" type="image/png" href="assets/img/favicon.jpg">


        <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->
</head>

<body>

        <div id="preloader"></div>


        <button class="scroll-top scroll-to-target" data-target="html">
                <i class="fas fa-angle-up scrollup-icon"></i>
        </button>
        <?php

$setting = getAll('setting');
if(mysqli_num_rows($setting) > 0){
        foreach($setting as $userItem){
?>

<?php
        }
}else{
        ?>
        <title>No tile</title>
<?php
}
?>

        <header class="header-area">
                <div class="container">
                        <div class="row align-items-center">
                                <div class="col-4 col-md-3">
                                        <div class="logo-wrapper">
                                                <a href="index.php">
                                                        <img src="assets/img/logo.png" alt>
                                                </a>
                                        </div>
                                </div>
                                <div class="col-8 col-md-9">
                                        <div class="hexa-nav">
                                                <div class="menu-wrapper">
                                                        <nav class="main-nav">

                                                                <input id="main-menu-state" type="checkbox" />
                                                                <label class="main-menu-btn" for="main-menu-state">
                                                                        <span class="main-menu-btn-icon"></span>
                                                                </label>

                                                                <ul id="main-menu" class="sm sm-mint">
                                                                        <li><a href="index.php">Home</a></li>
                                                                        <li><a href="about-us.php">About</a></li>
                                                                        <li><a href="service.php">Services</a></li>
                                                                        <li><a href="blog.php">Blog</a></li>
                                                                        <li><a href="contact.php">Contacts</a> </li>
                                                                </ul>
                                                        </nav>
                                                </div>
                                                <div class="top-button">
                                                        <a href="tel:+123456987" class="btn-1"><i
                                                                        class="flaticon-phone-call"></i> <?= $userItem['phone']; ?> </a>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </header>


        <div class="inner-hero">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12">
                                        <div class="hero-content">
                                                <h1>About Us</h1>
                                                <ul>
                                                        <li><a href="index.php">Home</a></li>
                                                        <li>About Us</li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>


        <div class="about-us">
                <div class="container">
                        <div class="row">
                                <div class="col-md-5">
                                        <div class="about-img">
                                                <img src="assets/img/about/about1.jpg" alt>
                                        </div>
                                        <div class="experience">
                                                <img src="assets/img/icon/icon7.png" alt>
                                                <h5> <span class="counterUp">15</span> + years</h5>
                                                <p>Experience</p>
                                        </div>
                                </div>
                                <div class="col-md-7">
                                        <div class="about-content">
                                                <h2>Our goal is to make sure
                                                        Your space is clean.</h2>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                                        invidunt ut labore et dolore magna aliquyam diam voluptua. At vero eos et accusam et justo
                                                        duo dolores et ea rebum.</p>
                                                <div class="ab-service">
                                                        <img src="assets/img/icon/about-icon1.png" alt>
                                                        <h5>Services Online Booking</h5>
                                                </div>
                                                <div class="ab-service">
                                                        <img src="assets/img/icon/about-icon2.png" alt>
                                                        <h5>100 Satisfaction Guarantee</h5>
                                                </div>
                                                <div class="ab-service">
                                                        <img src="assets/img/icon/about-icon3.png" alt>
                                                        <h5>Eco-Friendly Cleaning</h5>
                                                </div>
                                                <div class="ab-service">
                                                        <img src="assets/img/icon/about-icon4.png" alt>
                                                        <h5>Monthly, Fortnightly, Weekly discounts</h5>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>


        <div class="working-process working-process2">
                <div class="container">
                        <div class="wp-top">
                                <h2>Our Working Process</h2>
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                        <div class="single-w-process">
                                                <div class="swp-icon">
                                                        <span class="icon-1"></span>
                                                </div>
                                                <div class="swp-text">
                                                        <h5>Booking Online</h5>
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr diam.</p>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="single-w-process">
                                                <div class="swp-icon">
                                                        <span class="icon-2"></span>
                                                </div>
                                                <div class="swp-text">
                                                        <h5>Cleaning With Care</h5>
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr diam.</p>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="single-w-process">
                                                <div class="swp-icon">
                                                        <span class="icon-3"></span>
                                                </div>
                                                <div class="swp-text">
                                                        <h5>Get Your Result</h5>
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr diam.</p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>


        <div class="our-team">
                <div class="container">
                        <div class="team-top text-center">
                                <h2>Our Professionals</h2>
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                        <div class="team-member">
                                                <div class="image">
                                                        <img src="assets/img/team/team1.jpg" alt>
                                                </div>
                                                <div class="ieam-text">
                                                        <ul>
                                                                <li><a href> <i class="flaticon-facebook-logo"></i> </a></li>
                                                                <li><a href> <i class="flaticon-twitter"></i> </a></li>
                                                                <li><a href> <i class="flaticon-instagram"></i> </a></li>
                                                        </ul>
                                                        <h6>Mashil Nanchy</h6>
                                                        <span>CEO</span>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="team-member">
                                                <div class="image">
                                                        <img src="assets/img/team/team2.jpg" alt>
                                                </div>
                                                <div class="ieam-text">
                                                        <ul>
                                                                <li><a href> <i class="flaticon-facebook-logo"></i> </a></li>
                                                                <li><a href> <i class="flaticon-twitter"></i> </a></li>
                                                                <li><a href> <i class="flaticon-instagram"></i> </a></li>
                                                        </ul>
                                                        <h6>Devon Watson</h6>
                                                        <span>Manager</span>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="team-member">
                                                <div class="image">
                                                        <img src="assets/img/team/team3.jpg" alt>
                                                </div>
                                                <div class="ieam-text">
                                                        <ul>
                                                                <li><a href> <i class="flaticon-facebook-logo"></i> </a></li>
                                                                <li><a href> <i class="flaticon-twitter"></i> </a></li>
                                                                <li><a href> <i class="flaticon-instagram"></i> </a></li>
                                                        </ul>
                                                        <h6>Beverley Coleman</h6>
                                                        <span>Engineer</span>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>


        <div class="pricing pricing2">
                <div class="container">
                        <div class="cp-top">
                                <h2>Pricing Plans</h2>
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                        <div class="single-pricing">
                                                <div class="sp-top">
                                                        <h6>Start Plan</h6>
                                                        <h4>$55.99 <span>/Per Hour</span> </h4>
                                                        <a href class="btn-1">Get Started </a>
                                                </div>
                                                <div class="sp-bottom">
                                                        <ul>
                                                                <li>2 Bedrooms cleaning</li>
                                                                <li>Vacuuming</li>
                                                                <li>2 Bathroom cleaning</li>
                                                                <li>Window cleaning</li>
                                                                <li>Floor cleaning</li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="single-pricing">
                                                <div class="sp-top">
                                                        <h6>Popular Plan</h6>
                                                        <h4>$55.99 <span>/Per Hour</span> </h4>
                                                        <a href class="btn-1">Get Started </a>
                                                </div>
                                                <div class="sp-bottom">
                                                        <ul>
                                                                <li>2 Bedrooms cleaning</li>
                                                                <li>Vacuuming</li>
                                                                <li>2 Bathroom cleaning</li>
                                                                <li>Window cleaning</li>
                                                                <li>Floor cleaning</li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="single-pricing">
                                                <div class="sp-top">
                                                        <h6>Premium Plan</h6>
                                                        <h4>$55.99 <span>/Per Hour</span> </h4>
                                                        <a href class="btn-1">Get Started </a>
                                                </div>
                                                <div class="sp-bottom">
                                                        <ul>
                                                                <li>2 Bedrooms cleaning</li>
                                                                <li>Vacuuming</li>
                                                                <li>2 Bathroom cleaning</li>
                                                                <li>Window cleaning</li>
                                                                <li>Floor cleaning</li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <?php

$setting = getAll('setting');
if(mysqli_num_rows($setting) > 0){
        foreach($setting as $userItem){
?>

<?php
        }
}else{
        ?>
        <title>No tile</title>
<?php
}
?>

        <div class="footer-area">
                
                <div class="container">
                        <div class="footer-top" data-aos="fade-up" data-aos-duration="1000">
                                <h4>Want to Get 50% Off?
                                        Save Time & Money</h4>
                                <a href="tel:<?= $userItem['phone']; ?>" class="btn-1"><i class="flaticon-phone-call"></i> <?= $userItem['phone']; ?> </a>
                                <a data-toggle="modal" data-target="#myModal" href class="btn-2"> Appointment Now <i
                                                class="flaticon-right-arrow"></i></a>
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                        <div class="footer-logo-area">
                                                <img src="assets/img/logo.png" alt>
                                                <p><?= $userItem['description']; ?></p>
                                                <ul>
                                                        <li><a href> <i class="flaticon-facebook-logo"></i> </a></li>
                                                        <li><a href> <i class="flaticon-twitter"></i> </a></li>
                                                        <li><a href> <i class="flaticon-linkedin"></i> </a></li>
                                                        <li><a href> <i class="flaticon-instagram"></i> </a></li>
                                                </ul>
                                        </div>
                                </div>
                                <div class="col-md-8">
                                        <div class="footer-pages">
                                                <div class="page-links">
                                                        <h6>Our Services</h6>
                                                        <ul>
                                                                <li><a href="faq.php"><i class="flaticon-play-filled-triangle-button-of-right-arrow"></i>
                                                                                Faq</a></li>
                                                                <li><a href="pricing.php"><i class="flaticon-play-filled-triangle-button-of-right-arrow"></i>
                                                                                Pricing</a></li>
                                                                <li><a href="team.php"><i class="flaticon-play-filled-triangle-button-of-right-arrow"></i>
                                                                                Team</a></li>
                                                                <li><a href="project.php"><i class="flaticon-play-filled-triangle-button-of-right-arrow"></i>
                                                                                Projects</a></li>
                                                        </ul>
                                                </div>
                                                <div class="page-links">
                                                        <h6>Quick Links</h6>
                                                        <ul>
                                                                <li><a href="about-us.php"><i class="flaticon-play-filled-triangle-button-of-right-arrow"></i>
                                                                                About
                                                                                Us</a></li>
                                                                <li><a href="contact.php"><i class="flaticon-play-filled-triangle-button-of-right-arrow"></i>
                                                                                Appointment</a></li>
                                                                <li><a href="blog.php"><i class="flaticon-play-filled-triangle-button-of-right-arrow"></i>
                                                                                Blog</a></li>
                                                                
                                                        </ul>
                                                </div>
                                                <div class="page-links">
                                                        <h6>Contact</h6>
                                                        <ul>
                                                                <li><i class="flaticon-place con-icon"></i> <?= $userItem['address']; ?> </li>
                                                                <li><i class="flaticon-email con-icon"></i> <a
                                                                                href="mailto:<?= $userItem['email']; ?>"
                                                                                class="__cf_email__"
                                                                                ><?= $userItem['email']; ?></a>
                                                                </li>
                                                                <li><i class="flaticon-phone con-icon"></i> <?= $userItem['phone']; ?> </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <footer>
                <div class="container">
                        <p>Copyright © 2021 Haxa ! All Rights Reserved By <a href="https://voidcoders.com/" target="blank">VoidCoders</a></p>
                </div>
        </footer>


        <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                        <div class="modal-content">

                                <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>


                                <div class="booked">
                                        <h2>Book Now</h2>
                                        <p>Nunc sed augue lacus viverra vitae congue. Enim tortor at auctor urna nunc id cursus.</p>
                                        <form class="row">
                                                <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder ='Name'">
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder ='Email'">
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="phone" placeholder="Your Phone" onfocus="this.placeholder = ''" onblur="this.placeholder ='Your phone'">
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <input type="date" class="form-control" name="both">
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <select class="form-control">
                                                                <option>Select Services</option>
                                                                <option>Home Cleaning</option>
                                                                <option>Office Cleaning</option>
                                                                <option>Commercial Cleaning</option>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <select class="form-control">
                                                                <option>Choose Plans</option>
                                                                <option>Start Plan</option>
                                                                <option>Popular Plan</option>
                                                                <option>Premium Plan</option>
                                                        </select>
                                                </div>
                                                <button type="submit" class="btn-1">Booked</button>
                                        </form>
                                </div>

                        </div>
                </div>
        </div>


        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery-3.4.1.min.js"></script>

        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/aos.js"></script>

        <script src="assets/js/jquery-ui.js"></script>

        <script src="assets/js/jquery.smartmenus.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>

        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/lottie-player.js"></script>

        <script src="assets/js/theme.js"></script>
</body>

<!-- Mirrored from demo.voidcoders.com/htmldemo/hexa/main-files/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Apr 2024 17:34:50 GMT -->

</html>