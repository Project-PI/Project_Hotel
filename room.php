<?php
include_once ('dbconf.php');
if(isset($_POST['submit'])){
    $place = $_POST['place'];
    $adult = $_POST['adult'];
    $children = $_POST['children'];
    $suite = $_POST['suite'];
    $from_date =strtotime($_POST['from_date']);
    $from_date = date("Y-m-d",$from_date);
    $to_date =strtotime($_POST['to_date']);
    $to_date = date("Y-m-d",$to_date);
    $cuisine = $_POST['cuisine'];

    $sql = "INSERT INTO booking (place,adult,children,suite,from_date,to_date,cuisine) VALUES('$place','$adult','$children','$suite','$from_date', '$to_date','$cuisine')";

    $result = $conn->query($sql);

}
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Rooms</title>

    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/style/css/animate.css">
    <link rel="stylesheet" href="Public/css/room.css">

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
                                    <li><a href="#" data-hover="Rooms" class="active">Rooms</a></li>
                                    <li><a href="contact_us.php" data-hover="Contact">Contact</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="Language">Language</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" data-hover="English">English</a></li>
                                            <li><a href="room_kh.php" data-hover="Khmer">Khmer</a></li>
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

<!--gallery start here-->
<section class="gallery_room" id="galleryimg">
    <div class="gallery" id="gallery">
        <div class="container">
            <div class="gallery-main wow zoomIn" data-wow-delay="0.3s">
                <div class="gallery-top">
                    <h1>Gallery</h1>
                </div>
                <div class="row">
                    <div class="gallery-bott">
                        <div class="col-md-3 col1 gallery-grid">
                            <figure class="effect-bubba" onclick="openModal();currentSlide(1)">
                                <img src="vendors/style/image/r1.jpg">
                                <figcaption>
                                    <h4>View</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="gallery-bott">
                        <div class="col-md-3 col1 gallery-grid">
                            <figure class="effect-bubba" onclick="openModal();currentSlide(2)">
                                <img src="vendors/style/image/r2.jpg">
                                <figcaption>
                                    <h4>View</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="gallery-bott">
                        <div class="col-md-3 col1 gallery-grid">
                            <figure class="effect-bubba" onclick="openModal();currentSlide(3)">
                                <img src="vendors/style/image/r3.jpg">
                                <figcaption>
                                    <h4>View</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="gallery-bott">
                        <div class="col-md-3 col1 gallery-grid">
                            <figure class="effect-bubba" onclick="openModal();currentSlide(4)">
                                <img src="vendors/style/image/r4.jpg">
                                <figcaption>
                                    <h4>View</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="gallery-bott">
                        <div class="col-md-3 col1 gallery-grid">
                            <figure class="effect-bubba" onclick="openModal();currentSlide(5)">
                                <img src="vendors/style/image/r5.jpg">
                                <figcaption>
                                    <h4>View</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="gallery-bott">
                        <div class="col-md-3 col1 gallery-grid">
                            <figure class="effect-bubba" onclick="openModal();currentSlide(6)">
                                <img src="vendors/style/image/r6.jpg">
                                <figcaption>
                                    <h4>View</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="gallery-bott">
                        <div class="col-md-3 col1 gallery-grid">
                            <figure class="effect-bubba" onclick="openModal();currentSlide(7)">
                                <img src="vendors/style/image/r7.jpg">
                                <figcaption>
                                    <h4>View</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="gallery-bott">
                        <div class="col-md-3 col1 gallery-grid">
                            <figure class="effect-bubba" onclick="openModal();currentSlide(8)">
                                <img src="vendors/style/image/r8.jpg">
                                <figcaption>
                                    <h4>View</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="gallery-bott">
                        <div class="col-md-3 col1 gallery-grid">
                            <figure class="effect-bubba" onclick="openModal();currentSlide(9)">
                                <img src="vendors/style/image/r9.jpg">
                                <figcaption>
                                    <h4>View</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()"><img src="Public/image/close-cross.png" style="width: 30px; height: 30px;"></span>
        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 9</div>
                <img src="vendors/style/image/r1.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 9</div>
                <img src="vendors/style/image/r2.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 9</div>
                <img src="vendors/style/image/r3.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 9</div>
                <img src="vendors/style/image/r4.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 9</div>
                <img src="vendors/style/image/r5.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 9</div>
                <img src="vendors/style/image/r6.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">7 / 9</div>
                <img src="vendors/style/image/r7.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">8 / 9</div>
                <img src="vendors/style/image/r8.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">9 / 9</div>
                <img src="vendors/style/image/r9.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)"><img src="Public/image/arrow-left.png"></a>
            <a class="next" onclick="plusSlides(1)"><img src="Public/image/arrow-right.png"></a>
        </div>
    </div>
</section>
<!--gallery end here-->
<!-- Booking start here -->
<section id="booking">
    <div class="parallax">
        <form class="form_booking" method="post" action="room.php">
            <div class="booking_title">
                <h3>Booking Our Hotel</h3>
            </div>
            <div class="form-group has-warning wow slideInLeft">
                <label for="selectYourPlace">Your Place</label>
                <select class="form-control" name="place">
                    <option>Select your country...</option>
                    <optgroup label="Asia">
                        <option value="Cam">Cambodia</option>
                        <option value="Ch">China</option>
                        <option value="In">India</option>
                        <option value="Jp">Japan</option>
                        <option value="Laos">Laos</option>
                        <option value="Mal">Malaysia</option>
                        <option value="Myan">Myanmar</option>
                        <option value="Phi">Philippines</option>
                        <option value="Ru">Russia</option>
                        <option value="Sing">Singapore</option>
                        <option value="kr">South Korea</option>
                        <option value="Th">Thailand</option>
                        <option value="Vn">Vietnam</option>
                    </optgroup>
                    <optgroup label="Europe">
                        <option value="Fr">France</option>
                        <option value="Germ">Germany</option>
                        <option value="Belg">Belgium</option>
                        <option value="Spain">Spain</option>
                    </optgroup>
                </select>
            </div>
            <div class="form-group has-warning wow slideInRight">
                <label for="selectYourPlace">No. of Adults</label>
                <select type="text" class="form-control" name="adult">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                </select>
            </div>
            <div class="form-group has-warning wow slideInLeft">
                <label for="selectYourPlace">No. of Children</label>
                <select type="text" class="form-control" name="children">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group has-warning wow slideInRight">
                <label for="selectYourPlace">Suite</label>
                <select class="form-control" name="suite">
                    <option value="1"></option>
                    <option value="1">Single Room</option>
                    <option value="2">Premium Single Room</option>
                    <option value="2">Double Room</option>
                    <option value="2">Premium Double Room</option>
                    <option value="3">Deluxe Suite</option>
                    <option value="4">Executive Suite</option>
                    <option value="4">Ocean View Suite</option>
                    <option value="4">Presidential Suite</option>
                    <option value="3">The Penthouse</option>
                </select>
            </div>
            <div class="row">

                <div class="form-group has-warning col-md-6 wow slideInLeft">
                    <label for="exampleInputPassword1">Chack-In Date</label>
                    <input type="date" name="from_date" class="form-control">
                </div>
                <div class="form-group has-warning col-md-6 wow slideInRight">
                    <label for="exampleInputPassword1">Chack-Out Date</label>
                    <input type="date" name="to_date" class="form-control">
                </div>
            </div>
            <div class="form-group has-warning wow slideInLeft">
                <label class="">Choose Cuisine</label>
                <div class="row">
                    <ul type="none">
                        <li class="col-md-4" >
                            <input id="male" type="radio" name="cuisine" value="local">
                            <label class="w3-validate">Local</label>
                        </li>
                        <li class="col-md-4">
                            <input id="female" type="radio" name="cuisine" value="continental">
                            <label class="w3-validate">Continental</label>
                        </li>
                        <li class="col-md-4">
                            <input id="unknown" type="radio" name="cuisine" value="multicuisine">
                            <label class="w3-validate">Multi</label>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="submit" class="btn btn-warning btn-block" name="submit">Submit</button>
        </form>
    </div>
</section>
<!-- Booking end here -->
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
                <p>&copy;  2017 Project Team 1A All rights reserved.</p>
            </div>
        </div>
        <!-- END / FOOTER BOTTOM -->
    </footer>
</section>
<!-- end footer here -->

<script src="Public/js/room.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/jquery/jquery.js"></script>
<script src="vendors/style/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>


</body>
</html>

