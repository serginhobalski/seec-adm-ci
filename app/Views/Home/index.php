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
    <link rel="icon" href="<?php echo site_url('favicon.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('favicon.png') ?>">

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
                                                    <img class="rounded-circle" src="<?php echo site_url("usuarios/imagem/" . usuario_logado()->imagem); ?>" width="35" alt="">
                                                <?php endif; ?>
                                            </button>
                                            <div class="dropdown-menu bg-primary">
                                                <?php if (usuario_logado()->is_admin === true) : ?>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("adm"); ?>"><i class="fa fa-dashboard"></i><b class="text-white p-1">Meu painel</b> </a>
                                                    <hr>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("home/aluno") ?>"> <i class="fa fa-dashboard"></i>
                                                        Home | Aluno
                                                    </a>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("adm/aluno") ?>">
                                                        <i class="fa fa-dashboard"></i>
                                                        Adm | Aluno
                                                    </a>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("aulas") ?>">
                                                        <i class="fa fa-book"></i>
                                                        Aulas
                                                    </a>
                                                    <a class="dropdown-item bg-primary" class="dropdown-item text-primary" href="<?php echo site_url("home/professor") ?>">
                                                        <i class="fa fa-dashboard"></i>
                                                        Home | Professor
                                                    </a>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("adm/professor") ?>">
                                                        <i class="fa fa-dashboard"></i>
                                                        Adm | Professor
                                                    </a>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("adm/secretaria") ?>">
                                                        <i class="fa fa-dashboard"></i>
                                                        Adm | Secretaria
                                                    </a>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("adm/uetp") ?>">
                                                        <i class="fa fa-dashboard"></i>
                                                        Adm | UETP
                                                    </a>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("relatorios/meusrelatorios") ?>">
                                                        <i class="fa fa-dashboard"></i>
                                                        Relatorios | UETP
                                                    </a>
                                                    <hr>

                                                <?php elseif (usuario_logado()->is_uetp === true) : ?>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("adm/uetp"); ?>"><i class="fa fa-dashboard"></i><b class="text-white p-1">Meu painel</b> </a>
                                                <?php elseif (usuario_logado()->is_professor === true) : ?>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("adm/professor"); ?>"><i class="fa fa-dashboard"></i><b class="text-white p-1">Meu painel</b> </a>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("home/professor"); ?>"><i class="fa fa-book"></i><b class="text-white p-1">Minhas turmas</b> </a>
                                                <?php elseif (usuario_logado()->is_aluno === true) : ?>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("adm/aluno"); ?>"><i class="fa fa-dashboard"></i><b class="text-white p-1">Meu painel</b> </a>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("home/aluno"); ?>"><i class="fa fa-dashboard"></i><b class="text-white p-1">Meus Cursos</b> </a>
                                                <?php elseif (usuario_logado()->is_secretaria === true) : ?>
                                                    <a class="dropdown-item bg-primary" href="<?php echo site_url("adm/secretaria"); ?>"><i class="fa fa-dashboard"></i><b class="text-white p-1">Meu painel</b> </a>
                                                <?php endif; ?>
                                                <a class="dropdown-item bg-primary" href="<?php echo site_url("home/editarusuariologado"); ?>"><i class="fa fa-wrench"></i><b class="text-white p-1">Atualizar meus dados</b> </a>
                                                <a class="dropdown-item bg-primary" href="<?php echo site_url("logout"); ?>">
                                                    <b class="text-white p-1">
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
                                <a href="<?php echo site_url('/') ?>"><img src="<?php echo site_url('src/') ?>assets/images/logo-dark.png" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:;"><i class="ti-book"></i> SEEC-PA <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:;"><img src="<?php echo site_url('src/') ?>assets/images/mini-logo.png" alt="" width="25px"> Sobre<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="<?php echo site_url('/seec') ?>">A SEEC-PA</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('/departamentos') ?>">Nossos Departamentos</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;">ENAQ<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo site_url('/enaq') ?>">Orientações sobre o ENAQ</a></li>
                                                <li><a href="<?php echo site_url('/resultados_enaq') ?>">Resultados do ENAQ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo site_url('/calendario_geral') ?>"><i class="fa fa-calendar"></i> Calendário</a></li>
                                        <li><a href="<?php echo site_url('/contato') ?>"><i class="fa fa-address-card"></i> Contato</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="add-mega-menu"><a href="javascript:;"><i class="ti-bookmark-alt"></i> Cursos <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <h5 class="menu-adv-title">Cursos SEEC</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url('/itq') ?>">ITQ EAD </a></li>
                                                <li><a href="<?php echo site_url('/home/cursodetalhes/19') ?>">Curso de Postulantes</a></li>
                                                <li><a href="<?php echo site_url('/treinamentos') ?>">Treinamentos e Capacitações</a></li>
                                                <li><a href="<?php echo site_url('home/cursos') ?>">Todos os Cursos</a></li>
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
                                            <li><a href="<?php echo site_url("relatorios/meusrelatorios"); ?>" target="_blank"><i class="fa fa-paste"></i> Meus Relatórios</a></li>
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
                                            <li><a href="<?php echo site_url("adm/aluno") ?>"><i class="fa fa-dashboard"></i> Meu Painel</a></li>
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

        <!-- CONTEÚDO -->
        <div class="page-content bg-white">
            
            <!-- Main Slider -->
            <div class="rev-slider">
                <div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                    <div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                        <ul> <!-- SLIDE  -->
                            <li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="error-404.html" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="Science says that Women are generally happier">
                                <!-- MAIN IMAGE -->
                                <img src="<?php echo site_url('src/') ?>assets/images/slider/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina />

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-100-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['250','250','250','240']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="full" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
                                    Plataforma SEEC Pará
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-100-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['210','210','210','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                                    Servindo ao Reino de Deus
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-100-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['320','320','320','290']" data-width="['800','800','700','420']" data-height="['100','100','100','120']" data-whitespace="unset" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
                                    Existimos para servir ao Reino de Deus, equipando e instrumentalizando a Igreja de Cristo para a promoção de uma genuína transformação na sociedade.
                                </div>
                            </li>
                            <li data-index="rs-200" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo site_url('src/') ?>assets/images/slider/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="Science says that Women are generally happier">
                                <!-- MAIN IMAGE -->
                                <img src="<?php echo site_url('src/') ?>assets/images/slider/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina />

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:1;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-200-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['250','250','250','240']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="full" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;text-transform:uppercase;">
                                    Resultados ENAQ
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-200-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['210','210','210','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;text-transform:uppercase; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                                    Acompanhe todos os
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-200-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['320','320','320','290']" data-width="['800','800','700','420']" data-height="['100','100','100','120']" data-whitespace="unset" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
                                    Disponibilizamos os resultados das últimas provas do ENAQ (Exame Nacional Quadrangular) em nossa plataforma.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption Newspaper-Button rev-btn " id="slide-100-layer-5" data-x="['center','center','center','center']" data-hoffset="['90','80','75','90']" data-y="['top','top','top','top']" data-voffset="['400','400','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[12,12,12,12]" data-paddingright="[30,35,35,15]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[30,35,35,15]" style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;"><a class="text-orange" href="/resultados_enaq">SAIBA MAIS</a> </div>
                                <!-- <div class="tp-caption Newspaper-Button rev-btn" id="slide-100-layer-6" data-x="['center','center','center','center']" data-hoffset="['-90','-80','-75','-90']" data-y="['top','top','top','top']" data-voffset="['400','400','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[12,12,12,12]" data-paddingright="[30,35,35,15]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[30,35,35,15]" style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;">CONTACT US</div> -->

                            </li>
                            <!-- SLIDE  -->
                        </ul>
                    </div><!-- END REVOLUTION SLIDER -->
                </div>
            </div>
            
            <div class="content-block mt-4">

                <!-- Our Services -->
                <div class="section-area content-inner service-info-bx">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="service-bx">
                                    <div class="action-box">
                                        <img src="<?php echo site_url('src/') ?>assets/images/our-services/pic1.jpg" alt="">
                                    </div>
                                    <div class="info-bx text-center">
                                        <div class="feature-box-sm radius bg-white">
                                            <i class="fa fa-bank text-primary"></i>
                                        </div>
                                        <h4><a href="<?php echo site_url('itq') ?>">Ensino Teológico</a></h4>
                                        <a href="<?php echo site_url('itq') ?>" class="btn radius-xl">Saiba mais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="service-bx">
                                    <div class="action-box">
                                        <img src="<?php echo site_url('src/') ?>assets/images/our-services/pic2.jpg" alt="">
                                    </div>
                                    <div class="info-bx text-center">
                                        <div class="feature-box-sm radius bg-white">
                                            <i class="fa fa-book text-primary"></i>
                                        </div>
                                        <h4><a href="<?php echo site_url('home/cursodetalhes/19') ?>">Preparação Ministerial</a></h4>
                                        <a href="<?php echo site_url('home/cursodetalhes/19') ?>" class="btn radius-xl">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="service-bx m-b0">
                                    <div class="action-box">
                                        <img src="<?php echo site_url('src/') ?>assets/images/our-services/pic3.jpg" alt="">
                                    </div>
                                    <div class="info-bx text-center">
                                        <div class="feature-box-sm radius bg-white">
                                            <i class="fa fa-file-text-o text-primary"></i>
                                        </div>
                                        <h4><a href="<?php echo site_url('treinamentos') ?>">Treinamento de Líderes</a></h4>
                                        <a href="<?php echo site_url('treinamentos') ?>" class="btn radius-xl">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Our Services END -->

                <!-- Popular Courses -->
                <div class="section-area section-sp2 popular-courses-bx">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 heading-bx left">
                                <h2 class="title-head">Cursos <span>SEEC-PA</span></h2>
                                <p>Veja os principais cursos de nossa plataforma EAD.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">

                                <?php foreach ($cursos as $curso) : ?>

                                    <div class="item">
                                        <div class="cours-bx">
                                            <div class="action-box">
                                                <?php if ($curso->categoria === "itq") : ?>
                                                    <img src="<?php echo site_url("src/") ?>assets/images/courses/curso_itq.jpg" alt="">
                                                <?php elseif ($curso->categoria === "postulantes") : ?>
                                                    <img src="<?php echo site_url("src/assets/images/courses/curso_postulantes.jpg") ?>" alt="">
                                                <?php elseif ($curso->categoria === "ministerial") : ?>
                                                    <img src="<?php echo site_url("src/assets/images/courses/curso_lideranca.jpg") ?>" alt="">
                                                <?php endif; ?>

                                                <a href="<?php echo site_url("home/cursodetalhes/$curso->id") ?>" class="btn">Saiba mais</a>
                                            </div>
                                            <div class="info-bx text-center">
                                                <h5><a href="#"><?php echo $curso->nome ?></a></h5>
                                                <span><?php echo strtoupper($curso->categoria) ?></span>
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
                                                    <del>R$ <?php echo implode(",", explode(".", $curso->valor + 95)) ?></del>
                                                    <h5>R$ <?php echo implode(",", explode(".", $curso->valor)) ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Popular Courses END -->

                <!-- Events START -->
                <div class="section-area section-sp2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center heading-bx">
                                <h2 class="title-head m-b0">Próximos <span>Eventos</span></h2>
                                <p class="m-b0">Fique ligado em todos os eventos da SEEC-PA. </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
                                <div class="item">
                                    <div class="event-bx">
                                        <div class="action-box">
                                            <img src="<?php echo site_url('src/') ?>assets/images/event/1.jpg" alt="">
                                        </div>
                                        <div class="info-bx d-flex">
                                            <div>
                                                <div class="event-time">
                                                    <div class="event-date">06 a 08</div>
                                                    <div class="event-month">Janeiro</div>
                                                </div>
                                            </div>
                                            <div class="event-info">
                                                <h4 class="event-title"><a href="#">TCD 2023</a></h4>
                                                <ul class="media-post">
                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00 - 20:00</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i> Hotel Riviera, Ananindeua</a></li>
                                                </ul>
                                                <p>Está chegando o nosso Treinamento de Capacitação de Diretores, um evento crucial para educação teológica da IEQ no Pará, que reunirá todos os diretores UETP's (Unidades de Ensino Teológico e Pastoral) da IEQ em todo o Pará!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="event-bx">
                                        <div class="action-box">
                                            <img src="<?php echo site_url('src/') ?>assets/images/event/2.jpg" alt="">
                                        </div>
                                        <div class="info-bx d-flex">
                                            <div>
                                                <div class="event-time">
                                                    <div class="event-date">2º</div>
                                                    <div class="event-month">Semestre</div>
                                                    <div class="event-year">2023</div>
                                                </div>
                                            </div>
                                            <div class="event-info">
                                                <h4 class="event-title"><a href="#">Prova ENAQ | 2023</a></h4>
                                                <ul class="media-post">
                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 14:00 18:00</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i> Sedes Regionais</a></li>
                                                </ul>
                                                <p><b>Exame Nacional Quadrangular</b> Uma avaliação para todos os que desejam ingressar ou progredir no ministério pastoral da Igreja Quadrangular...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="event-bx">
                                        <div class="action-box">
                                            <img src="<?php echo site_url('src/') ?>assets/images/event/3.jpg" alt="">
                                        </div>
                                        <div class="info-bx d-flex">
                                            <div>
                                                <div class="event-time">
                                                    <div class="event-date">2º</div>
                                                    <div class="event-month">Semestre</div>
                                                    <div class="event-year">2023</div>
                                                </div>
                                            </div>
                                            <div class="event-info">
                                                <h4 class="event-title"><a href="#">Convenção Estadual de Pastores</a></h4>
                                                <ul class="media-post">
                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00 21:00</a></li>
                                                    <li><a href="#"><i class="fa fa-map-marker"></i> IEQ Sede</a></li>
                                                </ul>
                                                <p>Convenção Estadual de Pastores da IEQ no Pará.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="<?php echo site_url('home/cursos') ?>" class="btn">Ver todos os eventos</a>
                        </div>
                    </div>
                </div>



            </div>
            
        </div>
        <!-- Content END-->

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
                                <!-- <a href="<?php echo site_url('aulas') ?>" class="btn">Plataforma de Cursos</a> -->
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
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/1.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/1.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/2.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/2.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/3.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/3.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/4.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/4.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/5.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/5.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/6.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/6.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/7.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/7.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('src/') ?>assets/images/gallery/8.jpg" class="magnific-anchor"><img src="<?php echo site_url('src/') ?>assets/images/gallery/8.jpg" alt=""></a>
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