
<!DOCTYPE html>
<html>
<head>
    <title>Service</title>
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/style/css/animate.css">
    <link rel="stylesheet" type="text/css" href="Public/css/service.css">
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
                                    <li><a href="#" data-hover="Services" class="active">Services</a></li>
                                    <li><a href="room.php" data-hover="Rooms">Rooms</a></li>
                                    <li><a href="contact_us.php" data-hover="Contact">Contact</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="Language">Language</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" data-hover="English">English</a></li>
                                            <li><a href="service_kh.php" data-hover="Khmer">Khmer</a></li>
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

<!-- Start Slide Show -->
<section class="slideshow">
    <div class="panels cl-effect-16 nav nav-tabs" id="cl-effect-16">
        <div class="panel" id="panel1">
            <p></p>
            <p class="txt active"><a href="#Dining" data-hover="Dining" data-toggle="tab" id="dining_header">Dining</a></p>
            <p></p>
        </div>
        <div class="panel" id="panel2">
            <p></p>
            <p class="txt"><a href="#spa" data-hover="Spa" data-toggle="tab" id="spa_header">Spa</a></p>
            <p></p>
        </div>
        <div class="panel" id="panel3">
            <p></p>
            <p class="txt"><a href="#fitness" data-hover="Fitness" data-toggle="tab" id="fitness_header">Fitness</a></p>
            <p></p>
        </div>
    </div>
    <div class="tab-content">
        <!-- Start First Slide -->
        <div id="dining" class="tab-pane fade in active">
            <div class="cuisines agileits Dining">
                <!-- Container in first Slide -->
                <div class="container">
                    <div class="col-md-6 col-sm-6 cuisines-grids agileits Dining cuisines-grids-1 wow slideInLeft">
                        <h2>Best Sea Food</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 cuisines-grids agileits Dining cuisines-grids-2 wow slideInRight">
                        <img src="Public/image/cuisines.jpg" alt="cuisines">
                    </div>
                    <div class="clearfix"></div>
                    <!--menu-->
                    <div class="menu">
                        <div class="container">
                            <div class="menu-tag">
                                <h3 class="title">The Menu</h3>
                            </div>
                            <div class="load_more">
                                <ul id="myList" type="none">
                                    <li>
                                        <div class="l_g">
                                            <?php
                                            require_once ('dbconf.php');

                                            $sql =' select * from employee';
                                            $result=$conn->query($sql);
                                            $n=0;
                                            while ($row=$result->fetch_assoc()) {
                                                if ($n % 2 == 0) {
                                            ?>
                                            <div class="row l_g_r g_r">
                                                <div class="col-md-6 col-sm-6 menu-grids">
                                                    <div class="menu-text wow fadeInLeft">
                                                        <div class="menu-text-left">
                                                            <h4><?php echo $row['food_name']; ?></h4>
                                                            <h6><?php echo $row['contain']; ?></h6>
                                                        </div>
                                                        <div class="menu-text-midle">
                                                            <span class="line"></span>
                                                        </div>
                                                        <div class="menu-text-right">
                                                            <h4>$ <?php echo $row['price']; ?></h4>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                        <?php
                                                    } else {
                                                ?>
                                                <div class="col-md-6 col-sm-6 menu-grids">
                                                    <div class="menu-text wow fadeInLeft">
                                                        <div class="menu-text-left">
                                                            <h4><?php echo $row['food_name']; ?></h4>
                                                            <h6><?php echo $row['contain']; ?></h6>
                                                        </div>
                                                        <div class="menu-text-midle">
                                                            <span class="line"></span>
                                                        </div>
                                                        <div class="menu-text-right">
                                                            <h4>$ <?php echo $row['price']; ?></h4>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                    }
                                                $n++;
                                                }
                                                ?>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--//menu-->
                </div>
            </div>
        </div>
        <!-- End First Slide -->
        <!-- Start Second slide -->
        <div id="spa" class="tab-pane fade" style="display: none">
            <h2 class="title">The Best Service</h2>
            <div class="container">
                <div class="row">
                    <div class="ctas nav nav-tabs cl-effect-16">
                        <div class="cta col-md-4">
                            <div class="icon">
                                <img class="wow fadeInDown" src="Public/image/spa1.png">
                            </div>
                            <h4 class="cta_title"><a href="#spa1" data-toggle="tab">FACIAL TREATMENTS</a></h4>
                        </div>

                        <div class="cta col-md-4">
                            <div class="icon">
                                <img class="wow fadeInDown" src="Public/image/spa2.png">
                            </div>
                            <h4 class="cta_title"><a href="#spa2" data-toggle="tab">TRADITIONAL MASSAGES</a></h4>
                        </div>

                        <div class="cta col-md-4">
                            <div class="icon">
                                <img class="wow fadeInDown" src="Public/image/spa3.png">
                            </div>
                            <h4 class="cta_title"><a href="#spa3" data-toggle="tab">AROMATHERAPY MASSAGES</a></h4>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="spa1" class="tab-pane fade in active">
                            <div class="blog clearfix">
                                <div class="col-md-6 col-sm-6 blog_img wow slideInLeft">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox" style="height: 340px;">
                                            <div class="item active">
                                                <img src="Public/image/Facial_1.jpg" alt="Facial_1" class="Facial_slide_img">
                                            </div>
                                            <div class="item">
                                                <img src="Public/image/Facial_2.jpg" alt="Facial_2" class="Facial_slide_img" style="height: 340px;">
                                            </div>
                                            <div class="item">
                                                <img src="Public/image/Facial_3.jpg" alt="Facial_3" class="Facial_slide_img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_text col-md-6">
                                    <h2>FACIAL TREATMENTS</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="blog">
                                <div class="blog_left col-md-6">
                                    <div class="text" id="txt1">
                                        <h4>ANTI-AGING AND FIRMING FACIAL</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> <i>Option I </i>- 55 min<i>_34 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> <i>Option II </i>- 55 min<i>_48 USD</i><br><i>Caudalie Products from France</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                    <div class="text" id="txt2">
                                        <h4>LIGHTENING & WHITENING FACIAL</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> 55 min<i>_30 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                                <div class="blog_right col-md-6">
                                    <div class="text" id="txt3">
                                        <h4>FRUITY VITAMIN FACIAL</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> <i>Option I </i>- 55 min<i>_30 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> <i>Option II </i>- 55 min<i>_30 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                    <div class="text" id="txt4">
                                        <h4>RADIANCE & PROTECTION FACIAL</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> 55 min<i>_32 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="spa2" class="tab-pane fade">
                            <div class="blog clearfix">
                                <div class="col-md-6 col-sm-6 blog_img wow slideInLeft">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox" style="height: 340px;">
                                            <div class="item active">
                                                <img src="Public/image/foot_massage.jpg" alt="Facial_1" class="Facial_slide_img">
                                            </div>
                                            <div class="item">
                                                <img src="Public/image/Facial_2.jpg" alt="Facial_2" class="Facial_slide_img" style="height: 340px;">
                                            </div>
                                            <div class="item">
                                                <img src="Public/image/foot_massage_2.jpg" alt="Facial_3" class="Facial_slide_img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_text col-md-6">
                                    <h2>TRADITIONAL MASSAGES</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="blog">
                                <div class="blog_left col-md-6">
                                    <div class="text" id="txt1">
                                        <h4>REFLEXOLOGY FEET MASSAGE</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> <i>Option I </i>- 60 min<i>_24 USD</i> & 90 min<i>_33 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                    <div class="text" id="txt2">
                                        <h4>HEAD, BACK & SHOULDER MASSAGE</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> <i>Option I </i>- 60 min<i>_28 USD</i> & 90 min<i>_38 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                                <div class="blog_right col-md-6">
                                    <div class="text" id="txt3">
                                        <h4>TONIC</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> <i>Option I </i>- 55 min<i>_30 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                    <div class="text" id="txt4">
                                        <h4>SWEDISH MASSAGE</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> 55 min<i>_32 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="spa3" class="tab-pane fade">
                            <div class="blog clearfix">
                                <div class="col-md-6 col-sm-6 blog_img wow slideInLeft">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox" style="height: 340px;">
                                            <div class="item active">
                                                <img src="Public/image/aroma1.jpg" alt="Facial_1" class="Facial_slide_img">
                                            </div>
                                            <div class="item">
                                                <img src="Public/image/aroma2.jpg" alt="Facial_2" class="Facial_slide_img" style="height: 340px;">
                                            </div>
                                            <div class="item">
                                                <img src="Public/image/aroma3.jpg" alt="Facial_3" class="Facial_slide_img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_text col-md-6">
                                    <h2>AROMATHERAPY MASSAGES</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="blog">
                                <div class="blog_left col-md-6">
                                    <div class="text" id="txt1">
                                        <h4>CLASSIC</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> 60 min<i>_32 USD</i> & 90 min<i>_42 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                    <div class="text" id="txt2">
                                        <h4>HERBAL COMPRESS MASSAGE</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> 60 min<i>_36 USD</i>, 90 min<i>_46 USD</i> & 120 min<i>_56 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                                <div class="blog_right col-md-6">
                                    <div class="text" id="txt3">
                                        <h4>SAUNA</h4>
                                        <p class="option_spa"><span class="fa fa-share" aria-hidden="true"></span> 1 person<i>_15 USD</i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fitness" class="tab-pane fade" style="display: none">
            <div id="fitCenter" class="tab-pane fade in active">
                <div class="cuisines agileits Dining">
                    <!-- Container in third Slide -->
                    <div class="container">
                        <div class="col-md-6 col-sm-6 cuisines-grids Dining cuisines-grids-1 wow slideInLeft">
                            <h2>Fitness Center</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 cuisines-grids fitness_img cuisines-grids-2 wow rotateInUpRight">
                            <img src="Public/image/Fitness.jpg" alt="cuisines">
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- end container fitness -->
                </div>
            </div>
            <br>
            <div id="swimming" class="tab-pane fade in active">
                <div class="cuisines agileits Dining">
                    <!-- Container in third Slide -->
                    <div class="container">
                        <div class="col-md-6 col-sm-6 cuisines-grids fitness_img cuisines-grids-2 wow rotateInUpLeft">
                            <img src="Public/image/swimming_pool.jpg" alt="cuisines">
                        </div>
                        <div class="col-md-6 col-sm-6 cuisines-grids agileits Dining cuisines-grids-1 wow slideInRight">
                            <h2>Swimming Pool</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- end conttainer pool-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Slide Show -->

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
                                    <p><a href="mailto:L'hotel.paris@gmail.com">l.hotelparis@gmail.com</a></p>
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
                <p>&copy;  2017 Project Team All rights reserved.</p>
            </div>
        </div>
        <!-- END / FOOTER BOTTOM -->
    </footer>
</section>
<!-- end footer here -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="Public/js/service.js"></script>
<script src="vendors/jquery/jquery.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/style/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script>
    $('#spa_header').click(function () {
        $('#dining').css("display", "none");
        $('#fitness').css("display", "none");
        $('#spa').css("display", "block");
    })
    $('#fitness_header').click(function () {
        $('#dining').css("display", "none");
        $('#spa').css("display", "none");
        $('#fitness').css("display", "block");
    })
    $('#dining_header').click(function () {
        $('#spa').css("display", "none");
        $('#fitness').css("display", "none");
        $('#dining').css("display", "block");
    })
</script>
</body>
</html>