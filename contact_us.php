<?php
include_once ('dbconf.php');
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_us (first_name,last_name,email,phone,message) VALUES('$firstName','$lastName','$email','$phone','$message')";

    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/style/css/animate.css">
    <link rel="stylesheet" type="text/css" href="Public/css/contact.css">
</head>
<body>
<!-- Start header navbar -->
<section class="header_navbar">
    <div class="header">
        <div class="fixed-header">
            <div class="navbar-wrapper">
                <div class="container">
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="wow slideInLeft">
                                <a class="navbar-brand" href="index.php"><img class="imglogo" src="Public/image/logo.png" /></a>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <nav class="cl-effect-16" id="cl-effect-16">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php" data-hover="Home">Home</a></li>
                                    <li><a href="About.php" data-hover="About">About</a></li>
                                    <li><a href="service.php" data-hover="Services">Services</a></li>
                                    <li><a href="room.php" data-hover="Rooms">Rooms</a></li>
                                    <li><a href="#" data-hover="Contact" class="active">Contact</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="Language">Language</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" data-hover="English">English</a></li>
                                            <li><a href="contact_us_kh.html" data-hover="Khmer">Khmer</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="clearfix"> </div>
                    </nav>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</section>
<!-- End header navbar -->

<!-- contact star here -->
<section id="contact">
    <div class="container title">
        <h2 class="wow zoomIn">CONTACT US</h2>
        <div class="row">
            <div class="bolg-right col-md-6 wow slideInLeft">
                <div class="contact_info">
                    <div class="section_title">
                        <h3>contact information</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                    <ul class="list_add" type="none">
                        <li>
                            <i class="fa fa-map-marker"></i>
	                            <span>St Amsterdam finland, <br>
	                            United Stats of AKY16 8PN</span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>+1234567890</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <span>info@hotelbooking.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="blog-left col-md-6 wow slideInRight">
                <form action="contact_us.php" method="post">
                    <div class="row">
                        <div class="form-group has-warning col-md-6">
                            <input type="text" class="form-control input-lg" placeholder="First name" name="firstName">
                        </div>
                        <div class="form-group has-warning col-md-6">
                            <input type="text" class="form-control input-lg" placeholder="Last name" name="lastName">
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <input type="email" class="form-control input-lg" placeholder="E-mail" name="email">
                    </div>
                    <div class="form-group has-warning">
                        <input type="text" class="form-control input-lg" placeholder="Phone number" name="phone">
                    </div>
                    <textarea class="form-control has-warning" rows="10" placeholder="Message" name="message"></textarea>
                    <div class="btn_sub">
                        <button type="submit" class="btn btn-lg btn-warning btn-block" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15635.008706235769!2d104.88910030648357!3d11.569615452280775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517388680e15%3A0x63057e6682968f5!2sInstitute+of+Technology+of+Cambodia+(ITC)!5e0!3m2!1sen!2skh!4v1487819114784"  allowfullscreen></iframe>
    </div>
</section>
<!-- contact end here -->

<!-- Start footer here -->
<section class="footer-page">
    <!-- FOOTER -->
    <footer id="footer">

        <!-- FOOTER TOP -->
        <div class="footer_top">
            <div class="container">
                <div class="row">

                    <!-- WIDGET MAILCHIMP -->
                    <div class="col-md-3 wow fadeInDown" data-wow-delay="0s">
                        <div class="mailchimp">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h4>News &amp; Offers</h4>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mailchimp">
                            <div class="mailchimp-form">
                                <form action="#" method="POST" class="form-inline">
                                    <div class="col-md-8">
                                        <input type="text" name="email" placeholder="Your email address" class="input-text">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="awe-btn">SIGN UP</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET MAILCHIMP -->

                    <!-- WIDGET SOCIAL -->
                    <div class="col-md-4">
                        <div class="social">
                            <div class="social-content wow zoomIn">
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET SOCIAL -->

                </div>
            </div>
        </div>
        <!-- END / FOOTER TOP -->

        <!-- FOOTER CENTER -->
        <div class="footer_center">
            <div class="container" style="margin: 0;padding: 0">
                <div class="row" style="margin: 0;">

                    <div class="col-xs-12 col-lg-6" style="padding: 0;">
                        <div class="widget widget_logo">
                            <div class="widget-logo">
                                <div class="img_footer col-md-5 wow slideInLeft" data-wow-delay="0.1s">
                                    <a href="#"><img src="Public/image/logo.png" alt="" style=""></a>
                                </div>
                                <div class="text col-md-5 col-md-offset-2">
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> 225 Beach Street, Australian</p>
                                    <p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 1-548-854-8898</p>
                                    <p><a href="mailto:hillterhotel@gmail.com">l.hotelparis@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">Page site</h4>
                            <ul>
                                <li><a href="room.php#booking">Guest Book</a></li>
                                <li><a href="room.php#galleryimg">Gallery</a></li>
                                <li><a href="service.php#Dining">Restaurant</a></li>
                                <li><a href="#event">Event</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">ABOUT</h4>
                            <ul>
                                <li><a href="About.php">About</a></li>
                                <li><a href="contact_us.php">Contact Us</a></li>
                                <li><a href="#">Comming Soon</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-4 col-lg-2">
                        <div class="widget widget_tripadvisor">
                            <h4 class="widget-title">Tripadvisor</h4>
                            <div class="tripadvisor">
                                <p>Now with hotel reviews by</p>
                                <img src="Public/image/footer_tripadvisor.png" alt="">
                                <span class="tripadvisor-circle">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i class="part"></i>
                                </span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- END / FOOTER CENTER -->

        <!-- FOOTER BOTTOM -->
        <div class="footer_bottom">
            <div>
                <p>&copy; 2017 Project Team 1A All rights reserved.</p>
            </div>
        </div>
        <!-- END / FOOTER BOTTOM -->
    </footer>
</section>
<!-- end footer here -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/jquery/jquery.js"></script>
<script src="vendors/style/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>