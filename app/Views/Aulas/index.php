<!DOCTYPE html>
<html lang="pt-br">
<!-- courses-list21:19  -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>SEEC-PA | <?php echo $titulo; ?></title>

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
                            <ul class="wm-stripinfo">
                                <li>
                                    <i class="wmicon-location"></i>
                                    Trav. Timbó, 1.212, Pedreira, Belem / PA
                                </li>
                                <li><i class="wmicon-technology4"></i>(91) 999188-2198</li>
                                <li>
                                    <i class="wmicon-clock2"></i> Seg - Sex: 07:00 - 19:00
                                </li>
                            </ul>
                            <ul class="wm-adminuser-section">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin">login</a>
                                </li>
                                <li>
                                    <a href="#">Contato</a>
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
                            <a href="#" class="wm-logo"><img src="<?php echo site_url('lms/') ?>images/logo.png" alt="" /></a>
                        </div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Navegação</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active">
                                            <a href="<?php echo site_url('/') ?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Cursos</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="#">Grade de Cursos</a></li>
                                                <li><a href="#">Lista de Cursos</a></li>
                                                <li>
                                                    <a href="#.html">Detalhes do Curso</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Evento</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="#">Grade de Eventos</a></li>
                                                <li><a href="#">Detalhe do Evento</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="#">Cursos</a></li>
                                                <li>
                                                    <a href="#">Favoritos</a>
                                                </li>
                                                <li>
                                                    <a href="#">Meus Cursos</a>
                                                </li>
                                                <li>
                                                    <a href="#">Perfil</a>
                                                </li>
                                                <li>
                                                    <a href="#">Configurações</a>
                                                </li>
                                                <li>
                                                    <a href="#">Status</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="wm-megamenu-li">
                                            <a href="#">Páginas</a>
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
                                                                <a href="#">Courses List</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Courses Grid</a>
                                                            </li>
                                                            <li><a href="gallery.html">Gallery</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h4>Link 3</h4>
                                                        <ul class="wm-megalist">
                                                            <li>
                                                                <a href="#.html">Courses Detail</a>
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
                                                            <img src="<?php echo site_url('lms/') ?>extra-images/megamenu-frame.jpg" alt="" />
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
                                            <a href="#">Contato</a>
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
                            <a href="#" class="wm-header-btn">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->
        </header>
        <!--// Header \\-->

        <!--// Mini Header \\-->
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1><?php echo $titulo; ?></h1>
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Cursos</a></li>
                                <li>List</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Mini Header \\-->

        <!--// Main Content \\-->
        <div class="wm-main-content">
            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-3">
                            <div class="widget wm-search-course">
                                <h3 class="wm-short-title wm-color">Find Your Course</h3>
                                <p>Find your course here:</p>
                                <form>
                                    <ul>
                                        <li>
                                            <div class="wm-radio">
                                                <div class="wm-radio-partition">
                                                    <input id="male" type="radio" name="gender" value="male" />
                                                    <label for="male">by ID</label>
                                                </div>
                                                <div class="wm-radio-partition">
                                                    <input id="female" type="radio" name="gender" value="female" />
                                                    <label for="female">by name</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }" />
                                            <i class="wmicon-search"></i>
                                        </li>
                                        <li>
                                            <div class="wm-apply-select">
                                                <select>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li><input type="submit" value="Search course" /></li>
                                    </ul>
                                </form>
                            </div>
                            <div class="widget widget_check-box widget_scroll-box">
                                <h5>Search By Type</h5>
                                <ul>
                                    <li>
                                        <input id="type1" type="checkbox" />
                                        <label for="type1">
                                            <span></span>
                                            All Courses
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type2" type="checkbox" />
                                        <label for="type2">
                                            <span></span>
                                            Chemistry
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type3" type="checkbox" />
                                        <label for="type3">
                                            <span></span>
                                            Classical Archaeology
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type4" type="checkbox" />
                                        <label for="type4">
                                            <span></span>
                                            Classics & English
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type5" type="checkbox" />
                                        <label for="type5">
                                            <span></span>
                                            Materials Science
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type6" type="checkbox" />
                                        <label for="type6">
                                            <span></span>
                                            Mathematics
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type7" type="checkbox" />
                                        <label for="type7">
                                            <span></span>
                                            Physics & Philosophy
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type8" type="checkbox" />
                                        <label for="type8">
                                            <span></span>
                                            Theology & Religion
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type9" type="checkbox" />
                                        <label for="type9">
                                            <span></span>
                                            Classics & English
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type10" type="checkbox" />
                                        <label for="type10">
                                            <span></span>
                                            Materials Science
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type11" type="checkbox" />
                                        <label for="type11">
                                            <span></span>
                                            Mathematics
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type12" type="checkbox" />
                                        <label for="type12">
                                            <span></span>
                                            Physics & Philosophy
                                        </label>
                                    </li>
                                    <li>
                                        <input id="type13" type="checkbox" />
                                        <label for="type13">
                                            <span></span>
                                            Theology & Religion
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_check-box">
                                <h5>Search By Price</h5>
                                <div class="wm-range-slider">
                                    <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 60%"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%"></span>
                                    </div>
                                    <form>
                                        <input id="amount" type="text" readonly="" value="$59" />
                                        <input type="submit" value="Clear Filters" />
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget_check-box">
                                <h5>Search By Availability</h5>
                                <ul>
                                    <li>
                                        <input id="avail1" type="checkbox" />
                                        <label for="avail1">
                                            <span></span>
                                            Current
                                        </label>
                                    </li>
                                    <li>
                                        <input id="avail2" type="checkbox" />
                                        <label for="avail2">
                                            <span></span>
                                            Upcoming
                                        </label>
                                    </li>
                                    <li>
                                        <input id="avail3" type="checkbox" />
                                        <label for="avail3">
                                            <span></span>
                                            Self-Placed
                                        </label>
                                    </li>
                                    <li>
                                        <input id="avail4" type="checkbox" />
                                        <label for="avail4">
                                            <span></span>
                                            Arhived
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_check-box">
                                <h5>Search By Level</h5>
                                <ul>
                                    <li>
                                        <div class="wm-level-checkbox">
                                            <input id="level1" type="checkbox" />
                                            <label for="level1">
                                                <span></span>
                                                Introductory
                                            </label>
                                        </div>
                                        <div class="wm-levelrating">
                                            <span class="rating-box" style="width: 30%"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-level-checkbox">
                                            <input id="level2" type="checkbox" />
                                            <label for="level2">
                                                <span></span>
                                                Intermediate
                                            </label>
                                        </div>
                                        <div class="wm-levelrating">
                                            <span class="rating-box" style="width: 65%"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-level-checkbox">
                                            <input id="level3" type="checkbox" />
                                            <label for="level3">
                                                <span></span>
                                                Advanced
                                            </label>
                                        </div>
                                        <div class="wm-levelrating">
                                            <span class="rating-box" style="width: 100%"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_check-box widget_scroll-box">
                                <h5>Search By Language</h5>
                                <ul>
                                    <li>
                                        <input id="land1" type="checkbox" />
                                        <label for="land1">
                                            <span></span>
                                            Chinese / Mandarin
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land2" type="checkbox" />
                                        <label for="land2">
                                            <span></span>
                                            Spanish
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land3" type="checkbox" />
                                        <label for="land3">
                                            <span></span>
                                            English / U.S Spoken
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land4" type="checkbox" />
                                        <label for="land4">
                                            <span></span>
                                            Italian
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land5" type="checkbox" />
                                        <label for="land5">
                                            <span></span>
                                            French
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land6" type="checkbox" />
                                        <label for="land6">
                                            <span></span>
                                            German
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land7" type="checkbox" />
                                        <label for="land7">
                                            <span></span>
                                            Russian
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land8" type="checkbox" />
                                        <label for="land8">
                                            <span></span>
                                            Arabic / Egyptian Spoken
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land9" type="checkbox" />
                                        <label for="land9">
                                            <span></span>
                                            Italian
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land10" type="checkbox" />
                                        <label for="land10">
                                            <span></span>
                                            French
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land11" type="checkbox" />
                                        <label for="land11">
                                            <span></span>
                                            German
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land12" type="checkbox" />
                                        <label for="land12">
                                            <span></span>
                                            Russian
                                        </label>
                                    </li>
                                    <li>
                                        <input id="land13" type="checkbox" />
                                        <label for="land13">
                                            <span></span>
                                            Arabic / Egyptian Spoken
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_check-box">
                                <h5>Search By Duration</h5>
                                <ul>
                                    <li>
                                        <input id="duration1" type="checkbox" />
                                        <label for="duration1">
                                            <span></span>
                                            Under 1 hr
                                        </label>
                                    </li>
                                    <li>
                                        <input id="duration2" type="checkbox" />
                                        <label for="duration2">
                                            <span></span>
                                            1hr - 1hr 30mins
                                        </label>
                                    </li>
                                    <li>
                                        <input id="duration3" type="checkbox" />
                                        <label for="duration3">
                                            <span></span>
                                            2 hrs
                                        </label>
                                    </li>
                                    <li>
                                        <input id="duration4" type="checkbox" />
                                        <label for="duration4">
                                            <span></span>
                                            2 hrs - 3hrs
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <div class="col-md-9">
                            <div class="wm-filter-box">
                                <div class="wm-apply-select">
                                    <select>
                                        <option>By Category</option>
                                        <option>By Category</option>
                                        <option>By Category</option>
                                        <option>By Category</option>
                                    </select>
                                </div>
                                <div class="wm-apply-select">
                                    <select>
                                        <option>Search By</option>
                                        <option>Search By</option>
                                        <option>Search By</option>
                                        <option>Search By</option>
                                    </select>
                                </div>
                                <div class="wm-normal-btn">
                                    <a href="#" class="active">Free</a>
                                    <a href="#">Paid</a>
                                </div>
                                <div class="wm-view-btn">
                                    <a href="#" class="wmicon-squares active"></a>
                                    <a href="#" class="wmicon-signs"></a>
                                </div>
                            </div>
                            <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-1.jpg" alt="" />
                                                    <span class="wm-popular-hover">
                                                        <small>see course</small>
                                                    </span>
                                                </a>
                                                <figcaption>
                                                    <img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-thumb-1.jpg" alt="" />
                                                    <h6><a href="#">Shelly T. Forrester</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6>
                                                    <a href="#">Advanced Architectural Research</a>
                                                </h6>
                                                <p>
                                                    The course combines study of the history,
                                                    archaeology and art of all these classical world. It
                                                    looks at the societies and cultures of the ancient
                                                    Greel Mediterranean world through their written
                                                    texts.
                                                </p>
                                                <div class="wm-courses-price"><span>$32</span></div>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-2.jpg" alt="" />
                                                    <span class="wm-popular-hover">
                                                        <small>see course</small>
                                                    </span>
                                                </a>
                                                <figcaption>
                                                    <img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-thumb-2.jpg" alt="" />
                                                    <h6><a href="#">Sam K. Harrington</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                                                <p>
                                                    Fine Art is the making and study of visual art. It
                                                    educates and prepares students to become artists and
                                                    to follow other practices that are aligned to the
                                                    making of art.
                                                </p>
                                                <div class="wm-courses-price"><span>Free</span></div>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social7"></i> 438</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social6"></i> 28</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-time2"></i> 2 year</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L1</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-3.jpg" alt="" />
                                                    <span class="wm-popular-hover">
                                                        <small>see course</small>
                                                    </span>
                                                </a>
                                                <figcaption>
                                                    <img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-thumb-3.jpg" alt="" />
                                                    <h6><a href="#">Sara A. Shirley</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Transdisciplinary Design</a></h6>
                                                <p>
                                                    The Ruskin School of Art offers a three-year
                                                    studio-based BFA course in which students work
                                                    alongside each other in collaboratively organised
                                                    studios.
                                                </p>
                                                <div class="wm-courses-price"><span>$79</span></div>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social7"></i> 309</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social6"></i> 19</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-5.jpg" alt="" />
                                                    <span class="wm-popular-hover">
                                                        <small>see course</small>
                                                    </span>
                                                </a>
                                                <figcaption>
                                                    <img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-thumb-4.jpg" alt="" />
                                                    <h6><a href="#">Julius M. Lepage</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6>
                                                    <a href="#">Economics & Quality Management</a>
                                                </h6>
                                                <p>
                                                    Whereas many fine art courses run in an environment
                                                    devoted exclusively to art and design, Ruskin
                                                    students, as members of a collegiate university,
                                                    have the advantage of contact.
                                                </p>
                                                <div class="wm-courses-price"><span>$50</span></div>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social7"></i> 298</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social6"></i> 11</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-6.jpg" alt="" />
                                                    <span class="wm-popular-hover">
                                                        <small>see course</small>
                                                    </span>
                                                </a>
                                                <figcaption>
                                                    <img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-thumb-5.jpg" alt="" />
                                                    <h6><a href="#">Kayla A. McCrea</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6>
                                                    <a href="#">Philosophy, Politics and Economics (PPE)</a>
                                                </h6>
                                                <p>
                                                    Jack Stanton, who graduated in 2013 and now works as
                                                    a professional artist, recalls: ‘I think the most
                                                    important element of the Ruskin is the seriousness
                                                    with which your work is considered by tutors.
                                                </p>
                                                <div class="wm-courses-price"><span>$99</span></div>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social7"></i> 222</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social6"></i> 76</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-7.jpg" alt="" />
                                                    <span class="wm-popular-hover">
                                                        <small>see course</small>
                                                    </span>
                                                </a>
                                                <figcaption>
                                                    <img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-thumb-6.jpg" alt="" />
                                                    <h6><a href="#">Allan L. Oakes</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6>
                                                    <a href="#">Modern Languages and Linguistics</a>
                                                </h6>
                                                <p>
                                                    The first year of the course is structured to
                                                    introduce students to each other, to the resources
                                                    of the school and to the staff involved in teaching
                                                    and running the Ruskin.
                                                </p>
                                                <div class="wm-courses-price"><span>$49</span></div>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social7"></i> 248</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social6"></i> 21</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-time2"></i> 2 year</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-8.jpg" alt="" />
                                                    <span class="wm-popular-hover">
                                                        <small>see course</small>
                                                    </span>
                                                </a>
                                                <figcaption>
                                                    <img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-thumb-7.jpg" alt="" />
                                                    <h6><a href="#">Virginia R. Cruz</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">History (Ancient and Modern)</a></h6>
                                                <p>
                                                    The intimate working environment of the school,
                                                    arranged in two buildings, allows art history,
                                                    theory and criticism to be treated as integral to
                                                    the development of studio work.
                                                </p>
                                                <div class="wm-courses-price"><span>$79</span></div>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social7"></i> 188</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social6"></i> 11</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="wm-courses-popular-wrap">
                                            <figure>
                                                <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-9.jpg" alt="" />
                                                    <span class="wm-popular-hover">
                                                        <small>see course</small>
                                                    </span>
                                                </a>
                                                <figcaption>
                                                    <img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-thumb-8.jpg" alt="" />
                                                    <h6><a href="#">Roslyn W. Beavers</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6>
                                                    <a href="#">Classical Archaeology & Ancient History</a>
                                                </h6>
                                                <p>
                                                    After graduation, most students go on to work in
                                                    fine art as practising artists, teachers and art
                                                    writers, or as curators in public and private
                                                    galleries and for arts councils and organisations.
                                                </p>
                                                <div class="wm-courses-price"><span>$89</span></div>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social7"></i> 176</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-social6"></i> 30</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="wm-pagination">
                                <ul>
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="wmicon-arrows4"></i> Previous</a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>...</li>
                                    <li><a href="#">18</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="wmicon-arrows4"></i> Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
        </div>
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
                                <input type="text" value="Enter your e-mail address" onblur="if(this.value == '') { this.value ='Digite seu e-mail'; }" onfocus="if(this.value =='Digite seu e-mail') { this.value = ''; }" />
                                <input type="submit" value="Inscrever-se" />
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
                        <aside class="widget widget_contact_info col-md-8">
                            <a href="#" class="wm-footer-logo"><img src="<?php echo site_url('lms/') ?>images/logo.png" alt="" /></a>
                            <ul>
                                <li>
                                    <i class="wm-color wmicon-pin"></i>
                                    Trav. Timbó, 1212, Pedreira <br>
                                    Belém / PA
                                </li>
                                <li>
                                    <i class="wm-color wmicon-phone"></i>
                                    (91) 99188-2198 <br />
                                    (91) 99981-2198
                                </li>
                                <li>
                                    <i class="wm-color wmicon-letter"></i>
                                    <a href="mailto:ead@seecpa.com.br">ead@seecpa.com.br</a>
                                </li>
                            </ul>
                            <div class="wm-footer-icons">
                                <a href="#" class="wmicon-social5"></a>
                                <a href="#" class="wmicon-social4"></a>
                                <a href="#" class="wmicon-social3"></a>
                                <a href="#" class="wmicon-vimeo"></a>
                            </div>
                        </aside>
                        <!-- <aside class="widget widget_archive col-md-4">
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
                        </aside> -->
                        <aside class="widget widget_gallery col-md-4">
                            <div class="wm-footer-widget-title">
                                <h5>Nossos Instrutores</h5>
                            </div>
                            <ul class="gallery">
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galleryfull-1.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/widget-gallery-1.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galleryfull-2.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/widget-gallery-2.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galleryfull-3.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/widget-gallery-3.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galleryfull-4.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/widget-gallery-4.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galleryfull-5.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/widget-gallery-5.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galleryfull-6.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/widget-gallery-6.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galleryfull-7.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/widget-gallery-7.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galleryfull-8.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/widget-gallery-8.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galleryfull-9.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/widget-gallery-9.jpg" alt="" /></a>
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
                            <span><i class="fa fa-clock-o"></i> <?php echo date('d/m/Y - H:i') ?> </span>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <a target="_blank" href="#">SEEC-PA</a>
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
                        <span class="wm-color">Faça login</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Seus login'; }" onfocus="if(this.value =='Seu login') { this.value = ''; }" />
                                </li>
                                <li>
                                    <input type="password" value="password" onblur="if(this.value == '') { this.value ='senha'; }" onfocus="if(this.value =='senha') { this.value = ''; }" />
                                </li>
                                <li>
                                    <a href="#" class="wm-forgot-btn">Forgot Password?</a>
                                </li>
                                <li><input type="submit" value="Logar" /></li>
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
</body>

<!-- courses-list21:19  -->

</html>