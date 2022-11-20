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
        <div class="container">
            <ul class="list-inline">
                <li><a href="<?php echo site_url("/") ?>"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $titulo; ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->



    <div class="content-block">
        <!-- Portfolio  -->
        <div class="section-area section-sp1 gallery-bx">
            <div class="container">
                <div class="feature-filters clearfix center m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#"><span>Todos</span></a>
                        </li>
                        <li data-filter="itq" class="btn">
                            <input type="radio">
                            <a href="#"><span>ITQ EAD</span></a>
                        </li>
                        <li data-filter="postulantes" class="btn">
                            <input type="radio">
                            <a href="#"><span>Postulantes</span></a>
                        </li>
                        <li data-filter="lideranca" class="btn">
                            <input type="radio">
                            <a href="#"><span>Liderança</span></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                        <?php foreach ($cursos as $curso) : ?>
                            <li class="action-card col-lg-6 col-md-6 col-sm-12 <?php echo $curso->categoria; ?>">
                                <div class="event-bx m-b30">
                                    <div class="action-box">
                                        <img src="assets/images/event/pic1.jpg" alt="">
                                    </div>
                                    <div class="info-bx d-flex">
                                        <div>
                                            <div class="event-time">
                                                <div class="event-date"></div>
                                                <div class="event-month"><?php echo strtoupper($curso->categoria) ?></div>
                                            </div>
                                        </div>
                                        <div class="event-info">
                                            <h4 class="event-title"><a href="#"><?php echo esc($curso->nome) ?></a></h4>
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-bookmark"></i>R$ <?php echo implode(",", explode(".", $curso->valor)) ?></a></li>
                                                <li>
                                                    <a href="#"><i class="fa fa-map-marker"></i>
                                                        <?php if ($curso->ativo == true) : ?>
                                                            <b class="text-success">Ativo</b>
                                                        <?php else : ?>
                                                            <b class="text-danger">Inativo</b>
                                                        <?php endif; ?>
                                                    </a>
                                                </li>
                                            </ul>
                                            <p><?php echo $curso->descricao; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>



                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- Content END-->
<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>