<!DOCTYPE html>
<html lang="en">
<!-- courses-list21:19  -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SEEC-PA | <?php echo $this->renderSection('titulo'); ?></title>

    <!-- Css Files -->
    <link href="<?php echo site_url('lms/') ?>css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/flaticon.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/slick-slider.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/prettyphoto.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>build/mediaelementplayer.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>style.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/color.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/color-two.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/color-three.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/color-four.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/responsive.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <?php echo $this->renderSection('estilos'); ?>

</head>

<body>
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
        <!--// Header \\-->
        <header id="wm-header" class="wm-header-one">
            <!--// TopStrip \\-->
            <div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wm-language">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">español</a></li>
                                </ul>
                            </div>
                            <ul class="wm-stripinfo">
                                <li>
                                    <i class="wmicon-location"></i> 2925 Swick Hill Street,
                                    Charlotte, NC 28202
                                </li>
                                <li><i class="wmicon-technology4"></i> +1 984-700-7129</li>
                                <li>
                                    <i class="wmicon-clock2"></i> Mon - fri: 7:00am - 6:00pm
                                </li>
                            </ul>
                            <ul class="wm-adminuser-section">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin">login</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="index-2.html" class="wm-logo"><img src="<?php echo site_url('lms/') ?>images/logo-1.png" alt="" /></a>
                        </div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active">
                                            <a href="#">Home</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="index-2.html">Education Home V1</a></li>
                                                <li>
                                                    <a href="index-two.html">Education Home V2</a>
                                                </li>
                                                <li>
                                                    <a href="index-three.html">Education Home V3</a>
                                                </li>
                                                <li>
                                                    <a href="index-four.html">Education Home V4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">courses</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="courses-grid.html">Courses Grid</a></li>
                                                <li><a href="courses-list.html">Courses List</a></li>
                                                <li>
                                                    <a href="courses-detail.html">Courses Detail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">event</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="event-grid.html">Event Grid</a></li>
                                                <li><a href="event-detail.html">Event Detail</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="dashboard-courses.html">Courses</a></li>
                                                <li>
                                                    <a href="student-dashboard-favourite.html">Favourite</a>
                                                </li>
                                                <li>
                                                    <a href="student-dashboard-my-courses.html">My Courses</a>
                                                </li>
                                                <li>
                                                    <a href="student-dashboard-profile.html">Profile Settings</a>
                                                </li>
                                                <li>
                                                    <a href="student-dashboard-settings.html">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="student-dashboard-statement.html">Statement</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="wm-megamenu-li">
                                            <a href="#">Pages</a>
                                            <ul class="wm-megamenu">
                                                <li class="row">
                                                    <div class="col-md-2">
                                                        <h4>Link 1</h4>
                                                        <ul class="wm-megalist">
                                                            <li>
                                                                <a href="404-page.html">404 Error Page</a>
                                                            </li>
                                                            <li><a href="about-us.html">About Us</a></li>
                                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                                            <li><a href="blog-list.html">Blog List</a></li>
                                                            <li>
                                                                <a href="blog-detail.html">Blog Detail</a>
                                                            </li>
                                                            <li><a href="faq-page.html">Faq Page</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h4>Link 2</h4>
                                                        <ul class="wm-megalist">
                                                            <li>
                                                                <a href="ourprofessors.html">Our Professors</a>
                                                            </li>
                                                            <li>
                                                                <a href="our-professsors-detail.html">Our Professsors Detail</a>
                                                            </li>
                                                            <li>
                                                                <a href="typography-elements.html">Typography Elements</a>
                                                            </li>
                                                            <li>
                                                                <a href="courses-list.html">Courses List</a>
                                                            </li>
                                                            <li>
                                                                <a href="courses-grid.html">Courses Grid</a>
                                                            </li>
                                                            <li><a href="gallery.html">Gallery</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h4>Link 3</h4>
                                                        <ul class="wm-megalist">
                                                            <li>
                                                                <a href="courses-detail.html">Courses Detail</a>
                                                            </li>
                                                            <li><a href="shop-list.html">Shop List</a></li>
                                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                                            <li>
                                                                <a href="shop-single-product.html">Shop Detail</a>
                                                            </li>
                                                            <li>
                                                                <a href="contact-us.html">Contact Us</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="#" class="wm-thumbnail">
                                                            <img src="extra-images/megamenu-frame.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">Shop</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li>
                                                    <a href="shop-single-product.html">Shop Detail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="wm-megamenu-li">
                                            <a href="#">Contact</a>
                                            <ul class="wm-megamenu">
                                                <li class="row">
                                                    <div class="col-md-2">
                                                        <h4>Links 1</h4>
                                                        <ul class="wm-megalist">
                                                            <li>
                                                                <a href="contact-us.html">Contact Us</a>
                                                            </li>
                                                            <li>
                                                                <a href="404-page.html">404 Error Page</a>
                                                            </li>
                                                            <li><a href="shop-list.html">Shop List</a></li>
                                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                                            <li>
                                                                <a href="shop-single-product.html">Shop Detail</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h4>Artists text</h4>
                                                        <div class="wm-mega-text">
                                                            <p>
                                                                Your work is going to fill a large part of
                                                                your life, and the only way to be truly
                                                                satisfied is to do what you believe is great
                                                                work. And the only way to do great work is to
                                                                love.
                                                            </p>
                                                            <p>
                                                                If you haven't found it yet, keep looking.
                                                                Don't settle. As with all matters of the
                                                                heart, you'll know when you find it.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h4>sub category widget</h4>
                                                        <a href="#" class="wm-thumbnail">
                                                            <img src="<?php echo site_url('lms/') ?>extra-images/mega-menuadd.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                            <a href="#" class="wm-header-btn">get started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->
        </header>
        <!--// Header \\-->

        <!--// Mini Header \\-->
        <?php echo $this->renderSection('header'); ?>
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>Our Courses</h1>
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="index-2.html">Courses</a></li>
                                <li>List</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Mini Header \\-->

        <!--// Main Content \\-->
        <?php echo $this->renderSection('conteudo'); ?>
        <!--// Main Content \\-->

        <!--// Footer \\-->
        <footer id="wm-footer" class="wm-footer-one">
            <!--// FooterNewsLatter \\-->
            <div class="wm-footer-newslatter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <i class="wmicon-interface2"></i>
                                <input type="text" value="Enter your e-mail address" onblur="if(this.value == '') { this.value ='Enter your e-mail address'; }" onfocus="if(this.value =='Enter your e-mail address') { this.value = ''; }" />
                                <input type="submit" value="Subscribe to our newsletter" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterNewsLatter \\-->

            <!--// FooterWidgets \\-->
            <div class="wm-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget widget_contact_info col-md-3">
                            <a href="index-2.html" class="wm-footer-logo"><img src="<?php echo site_url('lms/') ?>images/logo-1.png" alt="" /></a>
                            <ul>
                                <li>
                                    <i class="wm-color wmicon-pin"></i> 195 Cooks Mine Road
                                    Espanola, NM 87532
                                </li>
                                <li>
                                    <i class="wm-color wmicon-phone"></i> +1 505-753-5656 <br />
                                    +1 505-753-4437
                                </li>
                                <li>
                                    <i class="wm-color wmicon-letter"></i>
                                    <a href="mailto:name@email.com">info@university.com</a>
                                    <a href="mailto:name@email.com">support@university.com</a>
                                </li>
                            </ul>
                            <div class="wm-footer-icons">
                                <a href="#" class="wmicon-social5"></a>
                                <a href="#" class="wmicon-social4"></a>
                                <a href="#" class="wmicon-social3"></a>
                                <a href="#" class="wmicon-vimeo"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_archive col-md-2">
                            <div class="wm-footer-widget-title">
                                <h5>Quick Links</h5>
                            </div>
                            <ul>
                                <li><a href="#">Our Latest Events</a></li>
                                <li><a href="#">Our Courses</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">404 Page</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">All Instructors</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_twitter col-md-4">
                            <div class="wm-footer-widget-title">
                                <h5><i class="wmicon-social2"></i> @enrollcampus</h5>
                            </div>
                            <ul>
                                <li>
                                    <p>
                                        Check Youniverse - Multipurpose PSD Template @ThemeForest:
                                        <a href="#">pic.twitter.com/xcVlqJySjq</a>
                                    </p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">2 hrs ago</time>
                                </li>
                                <li>
                                    <p>
                                        Check out my New PSD: FashionPlus - Fashion eCommerce:
                                        <a href="#">pic.twitter.com/xc445Ghyt</a>
                                    </p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">4 hrs ago</time>
                                </li>
                                <li>
                                    <p>
                                        MedicAid - Medical Template @ThemeForest:
                                        <a href="#">pic.twitter.com/xcVlq542wfER</a>
                                    </p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">1 day ago</time>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget_gallery col-md-3">
                            <div class="wm-footer-widget-title">
                                <h5>Our Instructors</h5>
                            </div>
                            <ul class="gallery">
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-1.jpg"><img src="extra-images/widget-gallery-1.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-2.jpg"><img src="extra-images/widget-gallery-2.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-3.jpg"><img src="extra-images/widget-gallery-3.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-4.jpg"><img src="extra-images/widget-gallery-4.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-5.jpg"><img src="extra-images/widget-gallery-5.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-6.jpg"><img src="extra-images/widget-gallery-6.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-7.jpg"><img src="extra-images/widget-gallery-7.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-8.jpg"><img src="extra-images/widget-gallery-8.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-9.jpg"><img src="extra-images/widget-gallery-9.jpg" alt="" /></a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// FooterWidgets \\-->

            <!--// FooterCopyRight \\-->
            <div class="wm-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span><i class="wmicon-nature"></i> Barcelona, Spain 2°F /
                                -17°C</span>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterCopyRight \\-->
        </footer>
        <!--// Footer \\-->

        <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="wm-modallogin-form wm-login-popup">
                        <span class="wm-color">Login to Your Account</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }" />
                                </li>
                                <li>
                                    <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }" />
                                </li>
                                <li>
                                    <a href="#" class="wm-forgot-btn">Forgot Password?</a>
                                </li>
                                <li><input type="submit" value="Sign In" /></li>
                            </ul>
                        </form>
                        <span class="wm-color">or try our socials</span>
                        <ul class="wm-login-social-media">
                            <li>
                                <a href="#"><i class="wmicon-social5"></i> Facebook</a>
                            </li>
                            <li class="wm-twitter-color">
                                <a href="#"><i class="wmicon-social4"></i> twitter</a>
                            </li>
                            <li class="wm-googleplus-color">
                                <a href="#"><i class="fa fa-google-plus-square"></i> Google+</a>
                            </li>
                        </ul>
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="wm-modallogin-form wm-register-popup">
                        <span class="wm-color">create Your Account today</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }" />
                                </li>
                                <li>
                                    <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }" />
                                </li>
                                <li>
                                    <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }" />
                                </li>
                                <li>
                                    <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }" />
                                </li>
                                <li><input type="submit" value="Create Account" /></li>
                            </ul>
                        </form>
                        <span class="wm-color">or signup with your socials:</span>
                        <ul class="wm-login-social-media">
                            <li>
                                <a href="#"><i class="wmicon-social5"></i> Facebook</a>
                            </li>
                            <li class="wm-twitter-color">
                                <a href="#"><i class="wmicon-social4"></i> twitter</a>
                            </li>
                            <li class="wm-googleplus-color">
                                <a href="#"><i class="fa fa-google-plus-square"></i> Google+</a>
                            </li>
                        </ul>
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="wm-modallogin-form">
                        <span class="wm-color">Search Your KeyWord</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }" />
                                </li>
                                <li><input type="submit" value="Search" /></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalSearch Box -->

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/jquery.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/jquery.prettyphoto.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/fitvideo.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/skills.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/slick.slider.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/waypoints-min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>build/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/functions.js"></script>
    <!-- Custom Scripts -->
    <?php echo $this->renderSection('scripts'); ?>
</body>

<!-- courses-list21:19  -->

</html>