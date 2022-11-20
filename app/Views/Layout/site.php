<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">

    <!-- DESCRIPTION -->
    <meta name="description" content="ADM | SEEC-PA">

    <!-- OG -->
    <meta property="og:title" content="ADM | SEEC-PA">
    <meta property="og:description" content="ADM | SEEC-PA">
    <meta property="og:image" content="">
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="<?php echo site_url('src/admin/') ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('src/admin/') ?>assets/images/favicon.png">

    <!-- PAGE TITLE HERE ============================================= -->
    <title>SEEC-PA | <?php echo $this->renderSection('titulo'); ?></title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/assets.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/color/color-1.css">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/vendors/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/vendors/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/vendors/revolution/css/navigation.css">
    <!-- REVOLUTION SLIDER END -->

    <!-- Render styles -->
    <?php echo $this->renderSection('estilos'); ?>
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <!-- Header Top ==== -->
        <header class="header rs-nav header-transparent">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar-left">
                            <ul>
                                <li>
                                    <a href="mailto:ead@seecpa.com.br"><i class="fa fa-question-circle"></i>Informações</a>
                                </li>
                                <li>
                                    <a href="mailto:ead@seecpa.com.br"><i class="fa fa-envelope-o"></i>ead@seecpa.com.br</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                <?php if (usuario_logado() === null) : ?>
                                    <li><a class="btn btn-success" href="<?php echo site_url('login') ?>"><i class="fa fa-user"></i> Login</a></li>
                                <?php else : ?>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                <?php if (usuario_logado()->imagem == "") : ?>
                                                    <?php echo strtoupper(usuario_logado()->nome); ?>
                                                <?php else : ?>
                                                    <img class="rounded-circle" src="<?php echo site_url("usuarios/imagem/$usuario->imagem"); ?>" alt="">
                                                <?php endif; ?>
                                            </button>
                                            <div class="dropdown-menu bg-primary">
                                                <?php if (usuario_logado()->is_admin === true) : ?>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("adm"); ?>"><i class="fa fa-dashboard"></i><b class="bg-primary text-white p-1">Meu painel</b> </a>
                                                    <hr>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("home/aluno") ?>">Home | Aluno</a>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("adm/aluno") ?>">Adm | Aluno</a>
                                                    <a class="dropdown-item text-primary" class="dropdown-item text-primary" href="<?php echo site_url("home/professor") ?>">Home | Professor</a>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("adm/professor") ?>">Adm | Professor</a>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("adm/secretaria") ?>">Adm | Secretaria</a>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("adm/uetp") ?>">Adm | UETP</a>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("relatorios/meusrelatorios") ?>">Relatorios | UETP</a>
                                                    <hr>

                                                <?php elseif (usuario_logado()->is_uetp === true) : ?>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("adm/uetp"); ?>"><i class="fa fa-dashboard"></i><b class="bg-primary text-white p-1">Meu painel</b> </a>
                                                <?php elseif (usuario_logado()->is_professor === true) : ?>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("home/professor"); ?>"><i class="fa fa-dashboard"></i><b class="bg-primary text-white p-1">Meu painel</b> </a>
                                                <?php elseif (usuario_logado()->is_aluno === true) : ?>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("home/aluno"); ?>"><i class="fa fa-dashboard"></i><b class="bg-primary text-white p-1">Meu painel</b> </a>
                                                <?php elseif (usuario_logado()->is_secretaria === true) : ?>
                                                    <a class="dropdown-item text-primary" href="<?php echo site_url("adm/secretaria"); ?>"><i class="fa fa-dashboard"></i><b class="bg-primary text-white p-1">Meu painel</b> </a>
                                                <?php endif; ?>
                                                <a class="dropdown-item text-primary" href="<?php echo site_url("home/editarusuariologado"); ?>"><i class="fa fa-wrench"></i><b class="bg-primary text-white p-1">Atualizar meus dados</b> </a>
                                                <a class="dropdown-item text-primary" href="<?php echo site_url("logout"); ?>">
                                                    <b class="bg-primary text-white p-1">
                                                        <i class="fa fa-arrow-circle-left"></i> Sair</b> </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo">
                            <a href="/"><img src="<?php echo site_url('src/') ?>assets/images/logo-white.png" alt=""></a>
                        </div>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li><a href="https://www.facebook.com/seecpa" class="btn-link" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/seec.pa/" class="btn-link" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCevn699ArQJQTxl08Nm5NTQ" class="btn-link" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                    <!-- Search Button ==== -->
                                    <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Search Box ==== -->
                        <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Pesquisar...">
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div>
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="/"><img src="<?php echo site_url('src/') ?>assets/images/logo-dark.png" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:;"><i class="ti-book"></i> SEEC-PA <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:;"><img src="<?php echo site_url('src/') ?>assets/images/mini-logo.png" alt="" width="25px"> Sobre<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/seec">A SEEC-PA</a>
                                                </li>
                                                <li>
                                                    <a href="/departamentos">Nossos Departamentos</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;">ENAQ<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/enaq">Orientações sobre o ENAQ</a></li>
                                                <li><a href="/resultados_enaq">Resultados do ENAQ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/calendario_geral"><i class="fa fa-calendar"></i> Calendário</a></li>
                                        <li><a href="/contato"><i class="fa fa-address-card"></i> Contato</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="add-mega-menu"><a href="javascript:;"><i class="ti-bookmark-alt"></i> Cursos <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <h5 class="menu-adv-title">Cursos SEEC</h5>
                                            <ul>
                                                <li><a href="/itq">ITQ EAD </a></li>
                                                <li><a href="/postulantes">Curso de Postulantes</a></li>
                                                <li><a href="/treinamentos">Treinamentos e Capacitações</a></li>
                                                <li><a href="/nossos_cursos">Todos os Cursos</a></li>
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <img src="<?php echo site_url('src/') ?>assets/images/adv/adv.jpg" alt="" />
                                        </li>
                                    </ul>
                                </li>
                                <?php if (!usuario_logado()) : ?>
                                    <li></li>
                                <?php elseif (usuario_logado()->is_admin === true) : ?>
                                    <li class="nav-dashboard"><a href="javascript:;"><i class="fa fa-dashboard"></i> Área ADM <i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url("adm"); ?>"><i class="ti-dashboard"></i> Painel ADM</a></li>
                                            <li><a href="<?php echo site_url("usuarios"); ?>" target="_blank"><i class="fa fa-users"></i> Usuários</a></li>
                                            <li><a href="<?php echo site_url("relatorios"); ?>" target="_blank"><i class="fa fa-paste"></i> Relatórios</a></li>
                                            <li><a href="<?php echo site_url("adm/cursos"); ?>" target="_blank"><i class="fa fa-book"></i> Cursos</a></li>
                                        </ul>
                                    </li>
                                <?php elseif (usuario_logado()->is_uetp === true) : ?>
                                    <li class="nav-dashboard"><a href="javascript:;"><i class="fa fa-dashboard"></i> Área do Diretor <i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url("adm/uetp"); ?>"><i class="fa fa-dashboard"></i> Meu Painel</a></li>
                                            <li><a href="<?php echo site_url("relatorios"); ?>" target="_blank"><i class="fa fa-paste"></i> Meus Relatórios</a></li>
                                            <li><a href="<?php echo site_url("usuarios/editarusuariologado"); ?>" target="_blank"><i class="fa fa-wrench"></i> Atualizar meus dados</a></li>
                                        </ul>
                                    </li>
                                <?php elseif (usuario_logado()->is_professor === true) : ?>
                                    <li class="nav-dashboard"><a href="javascript:;"><i class="fa fa-dashboard"></i> Área do Professor <i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url("home/professor") ?>"><i class="fa fa-dashboard"></i> Meu Painel</a></li>
                                            <li><a href="<?php echo site_url("home/professor") ?>" target="_blank"><i class="fa fa-paste"></i> Minhas Turmas</a></li>
                                            <li><a href="<?php echo site_url("home/editarusuariologado") ?>" target="_blank"><i class="fa fa-wrench"></i> Atualizar meus dados</a></li>
                                        </ul>
                                    </li>
                                <?php elseif (usuario_logado()->is_aluno === true) : ?>
                                    <li class="nav-dashboard"><a href="javascript:;"><i class="fa fa-dashboard"></i> Área do Aluno <i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url("home/aluno") ?>"><i class="fa fa-dashboard"></i> Meu Painel</a></li>
                                            <li><a href="<?php echo site_url("home/aluno") ?>" target="_blank"><i class="fa fa-paste"></i> Minhas Turmas</a></li>
                                            <li><a href="<?php echo site_url("home/editarusuariologado") ?>" target="_blank"><i class="fa fa-wrench"></i> Atualizar meus dados</a></li>
                                        </ul>
                                    </li>
                                <?php elseif (usuario_logado()->is_secretaria === true) : ?>
                                    <li class="nav-dashboard"><a href="javascript:;"><i class="fa fa-dashboard"></i> Área da Secretaria <i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url("adm/secretaria") ?>"><i class="fa fa-dashboard"></i> Painel</a></li>
                                            <li><a href="<?php echo site_url("usuarios/editarusuariologado") ?>" target="_blank"><i class="fa fa-wrench"></i> Atualizar meus dados</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            </ul>
                            <div class="nav-social-link">
                                <a href="https://www.facebook.com/seecpa" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/seec.pa/" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCevn699ArQJQTxl08Nm5NTQ" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Top END ==== -->



        <!-- Custom header -->
        <?php echo $this->renderSection('header'); ?>

        <?php echo $this->renderSection('conteudo'); ?>

        <!-- Footer ==== -->
        <footer>
            <div class="footer-top">
                <div class="pt-exebar">
                    <div class="container">
                        <div class="d-flex align-items-stretch">
                            <div class="pt-logo mr-auto">
                                <a href="/"><img src="<?php echo site_url('src/') ?>assets/images/logo-white.png" alt=""></a>
                            </div>
                            <div class="pt-social-link">
                                <ul class="list-inline m-a0">
                                    <li>
                                        <a href="#" class="btn-link"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-link"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-btn-join">
                                <a href="https://seecpa.com.br/cursos" target="_blank" class="btn">Plataforma de Cursos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                            <div class="widget">
                                <h5 class="footer-title">Cadastre-se para novidades</h5>
                                <p class="text-capitalize m-b20">
                                    Receba todas as novidades da SEEC-PA em seu e-mail.
                                </p>
                                <div class="subscribe-form m-b20">
                                    <form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                                        <div class="ajax-message"></div>
                                        <div class="input-group">
                                            <input name="email" required="required" class="form-control" placeholder="Digite seu e-mail" type="email">
                                            <span class="input-group-btn">
                                                <button name="submit" value="Submit" type="submit" class="btn">
                                                    <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                            <div class="row">
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">SEEC-PA</h5>
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/seec">Sobre</a></li>
                                            <li><a href="/enaq">ENAQ</a></li>
                                            <li><a href="/contato">Contato</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Plataformas</h5>
                                        <ul>
                                            <li>
                                                <a href="/adm">Plataforma ADM</a>
                                            </li>
                                            <li><a href="https://seecpa.com.br/cursos">Plataforma de Cursos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Cursos</h5>
                                        <ul>
                                            <li><a href="/itq">ITQ EAD</a></li>
                                            <li><a href="/postulantes">Postulantes</a></li>
                                            <li><a href="/treinamentos">Treinamentos</a></li>
                                            <li><a href="/nossos_cursos">Todos os Cursos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                            <div class="widget widget_gallery gallery-grid-4">
                                <h5 class="footer-title">Nossa Galeria</h5>
                                <ul class="magnific-image">
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/pic1.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/pic2.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/pic3.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/pic4.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/pic5.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/pic6.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/pic7.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/pic8.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            SEEC|PA &nbsp; &copy; &nbsp; <?php echo date('Y'); ?> &nbsp; - &nbsp; Desenvolvido por
                            <a target="_blank" href="https://estimulardigital.com">Estimular Digital</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END ==== -->
        <button class="back-to-top fa fa-chevron-up"></button>
    </div>

    <!-- External JavaScripts -->
    <script src="<?php echo site_url('src/') ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/counter/waypoints-min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/counter/counterup.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/masonry/masonry.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/masonry/filter.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/js/functions.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/js/contact.js"></script>

    <!-- Revolution JavaScripts Files -->
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo site_url('src/') ?>assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            var ttrevapi;
            var tpj = jQuery;
            if (tpj("#rev_slider_486_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            } else {
                ttrevapi = tpj("#rev_slider_486_1")
                    .show()
                    .revolution({
                        sliderType: "standard",
                        jsFileLocation: "<?php echo site_url('src/') ?>assets/vendors/revolution/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "on",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false,
                            },
                            arrows: {
                                style: "uranus",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: "",
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 10,
                                    v_offset: 0,
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 10,
                                    v_offset: 0,
                                },
                            },
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%",
                            presize: false,
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [768, 600, 600, 600],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "enterpoint",
                            speed: 400,
                            levels: [
                                5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55,
                            ],
                            type: "scroll",
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        },
                    });
            }
        });
    </script>

    <!-- Render custom scripts -->
    <?php echo $this->renderSection('scripts'); ?>

</body>

</html>