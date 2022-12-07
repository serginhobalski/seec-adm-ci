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
                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $titulo; ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->

    <!-- Page Content Box ==== -->
    <div class="content-block">
        <!-- About Us ==== -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="feature-container">
                            <div class="feature-md text-white m-b20">
                                <a href="#" class="icon-cell"><img src="<?php echo site_url('src/') ?>assets/images/icon/icon1.png" alt="" /></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">Nossa missão</h5>
                                <p>Existimos para servir ao Reino de Deus, equipando e instrumentalizando a Igreja de Cristo através do ensino da Palavra, para promoção de uma genuína transformação na sociedade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="feature-container">
                            <div class="feature-md text-white m-b20">
                                <a href="#" class="icon-cell"><img src="<?php echo site_url('src/') ?>assets/images/icon/icon3.png" alt="" /></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">Nossa Visão</h5>
                                <p>Temos como visão sermos uma secretaria de excelência, servindo como guardiã da Palavra de Deus, inspirando líderes cristãos a desenvolverem seus potenciais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="feature-container">
                            <div class="feature-md text-white m-b20">
                                <a href="#" class="icon-cell"><img src="<?php echo site_url('src/') ?>assets/images/icon/icon4.png" alt="" /></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="ttr-tilte">Nossos Valores</h5>
                                <p>Fidelidade no ensino da Palavra de Deus, integridade em todas as nossas ações e compromisso com a excelência do ensino bíblico-teológico.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- About Us END ==== -->
        <!-- Our Story ==== -->
        <div class="section-area bg-gray section-sp1 our-story">
            <div class="container">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-5 col-md-12 heading-bx">
                        <h2 class="m-b10">Nossa História</h2>
                        <h3 class="fw4">A Educação Quadranglar Internacional.</h3>
                        <p>A Irmã Aimée Semple McPherson, missionária e fundadora da Igreja Internacional do Evangelho Quadrangular, fundou a IEQ no ano de 1923 e, em 1927, a Faculdade Bíblica Quadrangular LIFE - Lighthouse to the International Foursquare World Evangelism (ou Farol para o Evangelismo Quadrangular Mundial).</p>
                        <hr>
                        <h3 class="fw4">A Educação Quadranglar no Brasil.</h3>
                        <p>A história da Educação Quadrangular no Brasil tem sido construída pela ardorosa paixão de homens e mulheres envolvidos no Ministério de Ensino desde a fundação da Igreja pelo Missionário Harold Williams.</p>
                        <p>Pela iniciativa do próprio Pr. Harold Williams, a partir da necessidade de se estudar a Palavra treinando obreiros para o ministério nas tendas, nasceu o Instituto Bíblico Quadrangular – IBQ.</p>
                        <p>Com o passar do tempo sentiu-se a necessidade de organizar e oficializar essa área de ensino específico para o Ministério Quadrangular. O trabalho do IBQ não foi fácil, nos seus primeiros anos era grande o número de pessoas que vinham de outros estados para estudar em São Paulo. O objetivo era tornar o IBQ um dinâmico centro de excelência na formação de líderes cristãos em um contexto de unidade e interpretação da Bíblia para o Ministério Quadrangular vinha se fortalecendo dia a dia.</p>
                        <p>Em 1954, o Conselho Nacional de Diretores - CND constituiu uma comissão para estudar a implantação e criação oficial de um curso bíblico para formação de obreiros. Como resultado do trabalho dessa comissão, o CND criou e fundou oficialmente o IBQ no dia 07 de janeiro de 1957.</p>
                    </div>
                    <div class="col-lg-7 col-md-12 heading-bx p-lr">
                        <div class="video-bx">
                            <img src="<?php echo site_url('src/') ?>assets/images/about/pic1.jpg" alt="" />
                            <a href="https://www.youtube.com/watch?v=80h-yENxAoI" class="popup-youtube video"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Story END ==== -->
        <!-- Our Status ==== -->
        <div class="section-area content-inner section-sp1">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-primary">
                                    <span class="counter">5000</span><span>+</span>
                                </div>
                                <span class="counter-text">postulantes atendidos</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-black">
                                    <span class="counter">2500</span><span>+</span>
                                </div>
                                <span class="counter-text">alunos</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-primary">
                                    <span class="counter">52</span><span>+</span>
                                </div>
                                <span class="counter-text">UETP's no Pará</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-black">
                                    <span class="counter">30</span><span>+</span>
                                </div>
                                <span class="counter-text">anos de serviço</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Status END ==== -->
        <!-- About Content ==== -->
        <div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(<?php echo site_url('src/') ?>assets/images/background/bg1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="join-content-bx text-white">
                            <h2>SEEC|PA</h2>
                            <h4>"Nossa missão está centrada em <b>2 Timóteo 2.15:</b> <em>'Procure apresentar-se a Deus aprovado, como obreiro que não tem do que se envergonhar, que maneja corretamente a palavra da verdade'</em>, trabalhando para a formação de líderes pastorais capacitados e maduros para atuação nas diversas áreas da Igreja."</h4>
                            <p>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Content END ==== -->
        <!-- Testimonials ====
        <div class="section-area section-sp2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-bx left">
                        <h2 class="title-head text-uppercase">what people <span>say</span></h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                    </div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-thumb">
                                <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic1.jpg" alt="">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="name">Peter Packer</h5>
                                <p>-Art Director</p>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-bx">
                            <div class="testimonial-thumb">
                                <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic2.jpg" alt="">
                            </div>
                            <div class="testimonial-info">
                                <h5 class="name">Peter Packer</h5>
                                <p>-Art Director</p>
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials END ==== -->
    </div>
    <!-- Page Content Box END ==== -->

</div>
<!-- Content END-->
<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>