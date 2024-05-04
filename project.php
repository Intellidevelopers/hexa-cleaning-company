<?php

require './config/function.php';

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.voidcoders.com/htmldemo/hexa/main-files/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Apr 2024 17:34:55 GMT -->

<head>

        <meta charset="utf-8">
        <title>Project | Hexa Cleaning Agency</title>
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
                                                <h1>Project</h1>
                                                <ul>
                                                        <li><a href="index.php">Home</a></li>
                                                        <li>Project</li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>


        <div class="project">
                <div class="container">
                        <div class="btn-group btn-group-toggle shuffleFilter project-btn" data-toggle="buttons">
                                <label class="btn active">
                                        <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                                </label>
                                <label class="btn">
                                        <input type="radio" name="shuffle-filter" value="house" />House
                                </label>
                                <label class="btn">
                                        <input type="radio" name="shuffle-filter" value="commercial" />Commercial
                                </label>
                                <label class="btn">
                                        <input type="radio" name="shuffle-filter" value="office" />Office
                                </label>
                                <label class="btn">
                                        <input type="radio" name="shuffle-filter" value="sarpace" />Sarpace
                                </label>
                                <label class="btn">
                                        <input type="radio" name="shuffle-filter" value="others" />Others
                                </label>
                        </div>
                        <div class="row my-shuffle-container">
                                <div class="col-md-6 single-project" data-groups="[&quot;house&quot;]">
                                        <div class="aspect__inner">
                                                <a data-fancybox="gallery" href="assets/img/portfolio/project1.png">
                                                        <img src="assets/img/portfolio/project1.png" alt />
                                                </a>
                                        </div>
                                        <div class="content">
                                                <p>Professional</p>
                                                <h4>House Cleaning</h4>
                                        </div>
                                </div>
                                <div class="col-md-6 single-project" data-groups="[&quot;commercial&quot;,&quot;others&quot;]">
                                        <div class="aspect__inner">
                                                <a data-fancybox="gallery" href="assets/img/portfolio/project2.png">
                                                        <img src="assets/img/portfolio/project2.png" alt />
                                                </a>
                                        </div>
                                        <div class="content">
                                                <p>Professional</p>
                                                <h4>House Cleaning</h4>
                                        </div>
                                </div>
                                <div class="col-md-6 single-project" data-groups="[&quot;office&quot;,&quot;sarpace&quot;]">
                                        <div class="aspect__inner">
                                                <a data-fancybox="gallery" href="assets/img/portfolio/project3.png">
                                                        <img src="assets/img/portfolio/project3.png" alt />
                                                </a>
                                        </div>
                                        <div class="content">
                                                <p>Professional</p>
                                                <h4>House Cleaning</h4>
                                        </div>
                                </div>
                                <div class="col-md-6 single-project" data-groups="[&quot;house&quot;,&quot;sarpace&quot;]">
                                        <div class="aspect__inner">
                                                <a data-fancybox="gallery" href="assets/img/portfolio/project4.png">
                                                        <img src="assets/img/portfolio/project4.png" alt />
                                                </a>
                                        </div>
                                        <div class="content">
                                                <p>Professional</p>
                                                <h4>House Cleaning</h4>
                                        </div>
                                </div>
                                <div class="col-md-6 single-project" data-groups="[&quot;commercial&quot;]">
                                        <div class="aspect__inner">
                                                <a data-fancybox="gallery" href="assets/img/portfolio/project6.png">
                                                        <img src="assets/img/portfolio/project6.png" alt />
                                                </a>
                                        </div>
                                        <div class="content">
                                                <p>Professional</p>
                                                <h4>House Cleaning</h4>
                                        </div>
                                </div>
                                <div class="col-md-6 single-project" data-groups="[&quot;others&quot;,&quot;house&quot;]">
                                        <div class="aspect__inner">
                                                <a data-fancybox="gallery" href="assets/img/portfolio/project5.png">
                                                        <img src="assets/img/portfolio/project5.png" alt />
                                                </a>
                                        </div>
                                        <div class="content">
                                                <p>Professional</p>
                                                <h4>House Cleaning</h4>
                                        </div>
                                </div>
                                <div class="col-1 Ssizer-element"></div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                        <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center">
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                </ul>
                                        </nav>
                                </div>
                        </div>
                </div>
        </div>


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
        <script src="assets/js/shuffle.js"></script>

        <script src="assets/js/theme.js"></script>
</body>

<!-- Mirrored from demo.voidcoders.com/htmldemo/hexa/main-files/project.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Apr 2024 17:34:57 GMT -->

</html>