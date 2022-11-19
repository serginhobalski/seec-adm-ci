<?php echo $this->extend('Layout/site'); ?>

<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>


<!-- Custom styles -->
<?php echo $this->section('estilos'); ?>
<!-- Styles content here -->
<?php $this->endSection(); ?>


<!-- Custom header -->
<?php echo $this->section('header'); ?>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>
<!-- Page content here -->
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(<?php echo site_url('src/') ?>assets/images/banner/banner2.jpg);">
        <div class="container">
            <div class="page-banner-entry pt-5">
                <br><br>
                <h1 class="text-white mt-5"><?php echo $titulo; ?></h1>
                <h3 class="text-white"><?php echo $subtitulo; ?></h3>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">

        <?php echo $this->include('Layout/_mensagens') ?>

        <div class="container">
            <ul class="list-inline">
                <li><a href="<?php echo site_url("adm/professor") ?>"><i class="fa fa-dashboard"></i> Painel</a></li>
                <li><?php echo $titulo; ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->

    <!-- contact area -->
    <div class="content-block">
        <!-- Portfolio  -->
        <div class="section-area section-sp1 gallery-bx">
            <div class="container">
                <div class="feature-filters clearfix center m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#"><span>All</span></a>
                        </li>
                        <li data-filter="happening" class="btn">
                            <input type="radio">
                            <a href="#"><span>Happening</span></a>
                        </li>
                        <li data-filter="upcoming" class="btn">
                            <input type="radio">
                            <a href="#"><span>Upcoming</span></a>
                        </li>
                        <li data-filter="expired" class="btn">
                            <input type="radio">
                            <a href="#"><span>Expired</span></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                        <li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
                            <div class="event-bx m-b30">
                                <div class="action-box">
                                    <img src="assets/images/event/pic1.jpg" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div>
                                        <div class="event-time">
                                            <div class="event-date">29</div>
                                            <div class="event-month">October</div>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="action-card col-lg-6 col-md-6 col-sm-12 upcoming">
                            <div class="event-bx m-b30">
                                <div class="action-box">
                                    <img src="assets/images/event/pic2.jpg" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div>
                                        <div class="event-time">
                                            <div class="event-date">29</div>
                                            <div class="event-month">October</div>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="action-card col-lg-6 col-md-6 col-sm-12  upcoming">
                            <div class="event-bx m-b30">
                                <div class="action-box">
                                    <img src="assets/images/event/pic3.jpg" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div>
                                        <div class="event-time">
                                            <div class="event-date">29</div>
                                            <div class="event-month">October</div>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
                            <div class="event-bx m-b30">
                                <div class="action-box">
                                    <img src="assets/images/event/pic4.jpg" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div>
                                        <div class="event-time">
                                            <div class="event-date">29</div>
                                            <div class="event-month">October</div>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="action-card col-lg-6 col-md-6 col-sm-12 expired">
                            <div class="event-bx m-b30">
                                <div class="action-box">
                                    <img src="assets/images/event/pic2.jpg" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div>
                                        <div class="event-time">
                                            <div class="event-date">29</div>
                                            <div class="event-month">October</div>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="action-card col-lg-6 col-md-6 col-sm-12 happening">
                            <div class="event-bx m-b30">
                                <div class="action-box">
                                    <img src="assets/images/event/pic1.jpg" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div>
                                        <div class="event-time">
                                            <div class="event-date">29</div>
                                            <div class="event-month">October</div>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->

</div>
<!-- Content END-->
<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>