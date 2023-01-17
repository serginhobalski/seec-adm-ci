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

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(<?php echo site_url('src/assets/images/banner/banner3.jpg') ?>);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white"><?php echo $titulo ?></h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li><?php echo $titulo ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 m-b30">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        <img src="<?php echo site_url('src/') ?>assets/images/courses/itq.jpg" alt="">
                                        <a href="#" class="btn">Mais</a>
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">Instituto Teológico Quadrangular</a></h5>
                                        <h6 class="text-primary">Teologia</h6>
                                        <p>
                                            Instituto Teológico Quadrangular – Uma escola vocacional evangélica que tem por objetivo promover a educação e a cultura na Igreja do Evangelho Quadrangular, a partir do estudo da teologia e das doutrinas bíblicas das Sagradas Escrituras, através da oferta do Curso Livre em Teologia nas modalidades: presencial e EAD.
                                        </p>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span></span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del></del>
                                            <h5></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 m-b30">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        <img src="<?php echo site_url('src/') ?>assets/images/courses/mqti.jpg" alt="">
                                        <a href="#" class="btn">Mais</a>
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">Missão Quadrangular Teológica Infantojuvenil</a></h5>
                                        <h6 class="text-primary">Teologia</h6>
                                        <p>
                                            Missão Quadrangular Teológica Infantojuvenil – Uma escola vocacional, bíblica e teológica que tem por objetivo preparar os vocacionados para o Ministério Infantil, que almejam se tornar líderes, educadores e pastores de crianças, pré-adolescentes e adolescentes, através da construção de competências teóricas e práticas para atuarem na Igreja Local e na comunidade.
                                        </p>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span></span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del></del>
                                            <h5></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 m-b30">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        <img src="<?php echo site_url('src/') ?>assets/images/courses/ctmq.jpg" alt="">
                                        <a href="#" class="btn">Mais</a>
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">Centro de Treinamento Missionário Quadrangular</a></h5>
                                        <h6 class="text-primary">Teologia</h6>
                                        <p>
                                            O Centro de Treinamento Missionário Quadrangular existem para oferecer um treinamento intensivo, formando e fortalecendo o caráter do aluno. Nosso propósito é equipá-lo com ferramentas bíblicas, missiológicas, entre outras, visando à formação de missionários, líderes e pastores espiritualmente fortes, adaptáveis e comprometidos.
                                        </p>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span></span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del></del>
                                            <h5></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 m-b30">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        <img src="<?php echo site_url('src/') ?>assets/images/courses/debq.jpg" alt="">
                                        <a href="#" class="btn">Mais</a>
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">Departamento de Escola Bíblica Quadrangular</a></h5>
                                        <h6 class="text-primary">Bíblia</h6>
                                        <p>
                                            Departamento de Escola Bíblica Quadrangular – A Escola Bíblica teve seu início no século XVIII na Inglaterra e espalhou-se pelo século XIX. Na época, as pessoas ingressavam na igreja depois de passarem pela Escola Bíblica, quando já tinham uma base. Já hoje, as pessoas iniciam indo aos cultos.
                                        </p>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span></span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del></del>
                                            <h5></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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