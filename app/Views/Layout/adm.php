<!DOCTYPE html>
<html lang="pt-br">

<!-- Mirrored from educhamp.themetrades.com/demo/admin// by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="ADM | SEEC-PA" />

    <!-- OG -->
    <meta property="og:title" content="ADM | SEEC-PA" />
    <meta property="og:description" content="ADM | SEEC-PA" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="<?php echo site_url('favicon.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('favicon.png') ?>">

    <!-- PAGE TITLE HERE ============================================= -->
    <title>SEEC-PA | <?php echo $this->renderSection('titulo'); ?></title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="<?php echo site_url('src/admin/') ?>assets/js/html5shiv.min.js"></script>
	<script src="<?php echo site_url('src/admin/') ?>assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/admin/') ?>assets/css/assets.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/admin/') ?>assets/vendors/calendar/fullcalendar.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/admin/') ?>assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/admin/') ?>assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/admin/') ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/admin/') ?>assets/css/dashboard.css">
    <link class="skin" rel="stylesheet" type="text/css" href="<?php echo site_url('src/admin/') ?>assets/css/color/color-1.css">

    <!-- Render styles -->
    <?php echo $this->renderSection('estilos'); ?>
</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- header start -->
    <header class="ttr-header">
        <div class="ttr-header-wrapper">
            <!--sidebar menu toggler start -->
            <div class="ttr-toggle-sidebar ttr-material-button">
                <i class="ti-close ttr-open-icon"></i>
                <i class="ti-menu ttr-close-icon"></i>
            </div>
            <!--sidebar menu toggler end -->
            <!--logo start -->
            <div class="ttr-logo-box">
                <div>
                    <a href="/" class="ttr-logo">
                        <img class="ttr-logo-mobile" alt="" src="<?php echo site_url('src/admin/') ?>assets/images/logo-mobile.png" width="30" height="30">
                        <img class="ttr-logo-desktop" alt="" src="<?php echo site_url('src/admin/') ?>assets/images/logo-white.png" width="160" height="27">
                    </a>
                </div>
            </div>
            <!--logo end -->
            <div class="ttr-header-menu">
                <!-- header left menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="<?php echo site_url('mensagens'); ?>" class="ttr-material-button ttr-submenu-toggle">
                            <i class="fa fa-paper-plane"></i> Mensagens</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('calendario'); ?>" class="ttr-material-button ttr-submenu-toggle">
                            <i class="fa fa-calendar"></i> Calendário</a>
                    </li>
                    <?php if (usuario_logado()->is_admin === true) : ?>
                        <li>
                            <a href="<?php echo site_url('relatorios') ?>" class="ttr-material-button ttr-submenu-toggle">
                                <i class="fa fa-paste"></i> Relatórios Enviados</a>
                        </li>
                    <?php elseif (usuario_logado()->is_uetp === true) : ?>
                        <li>
                            <a href="<?php echo site_url('relatorios/meusrelatorios') ?>" class="ttr-material-button ttr-submenu-toggle">
                                <i class="fa fa-paste"></i> Meus relatórios</a>
                        </li>
                    <?php elseif (usuario_logado()->is_secretaria === true) : ?>
                        <li>
                            <a href="<?php echo site_url('relatorios') ?>" class="ttr-material-button ttr-submenu-toggle">
                                <i class="fa fa-paste"></i> Ver relatórios</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <!-- header left menu end -->
            </div>
            <div class="ttr-header-right ttr-with-seperator">
                <!-- header right menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
                        <div class="ttr-header-submenu noti-menu">
                            <div class="ttr-notify-header">
                                <span class="ttr-notify-text-top">Novas</span>
                                <span class="ttr-notify-text">Mensagens</span>
                            </div>
                            <div class="noti-box-list">
                                <ul>
                                    <li>
                                        <span class="notification-icon dashbg-red">
                                            <i class="fa fa-bullhorn"></i>
                                        </span>
                                        <span class="notification-text">
                                            <span>Em breve </span> novas notificações aqui.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> Data | Hora</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle">
                            <span class="ttr-user-avatar">
                                <?php if (usuario_logado()->imagem != "") : ?>
                                    <img alt="" src="<?php echo site_url("usuarios/imagem/" . usuario_logado()->imagem); ?>" width="32" height="32">
                                <?php else : ?>
                                    <img alt="" src="<?php echo site_url('src/assets/images/user-avatar.png') ?>" width="32" height="32">
                                <?php endif; ?>
                            </span></a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <li>
                                    <a href="<?php echo site_url('/perfil') ?>">
                                        <i class="fa fa-user-circle"></i> <?php echo usuario_logado()->nome; ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("mensagens") ?> ">
                                        <i class="fa fa-paper-plane"></i> Mensagens</a>
                                </li>
                                <?php if (usuario_logado()->is_admin) : ?>
                                    <hr>
                                    <li><a class="dropdown-item text-primary" href="<?php echo site_url("aulas") ?>"><i class="ti-settings"></i> Aulas</a></li>
                                    <li><a class="dropdown-item text-primary" href="<?php echo site_url("home/aluno") ?>"><i class="ti-settings"></i> Home | Aluno</a></li>
                                    <li><a class="dropdown-item text-primary" href="<?php echo site_url("adm/aluno") ?>"><i class="ti-settings"></i> Adm | Aluno</a></li>
                                    <li><a class="dropdown-item text-primary" class="dropdown-item text-primary" href="<?php echo site_url("home/professor") ?>"><i class="ti-settings"></i> Home | Professor</a></li>
                                    <li><a class="dropdown-item text-primary" href="<?php echo site_url("adm/professor") ?>"><i class="ti-settings"></i> Adm | Professor</a></li>
                                    <li><a class="dropdown-item text-primary" href="<?php echo site_url("adm/secretaria") ?>"><i class="ti-settings"></i> Adm | Secretaria</a></li>
                                    <li></li>
                                    <li><a class="dropdown-item text-primary" href="<?php echo site_url("adm/uetp") ?>"><i class="ti-settings"></i> Adm | UETP</a></li>
                                    <li><a class="dropdown-item text-primary" href="<?php echo site_url("relatorios/meusrelatorios") ?>"><i class="ti-settings"></i> Relatorios | UETP</a></li>
                                    <hr>
                                <?php endif; ?>
                                <?php if (usuario_logado()->is_professor) : ?>
                                    <li>
                                        <a href="<?php echo site_url("home/professor") ?> ">
                                            <i class="fa fa-book"></i> Minhas Turmas</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("adm/professor") ?> ">
                                            <i class="fa fa-dashboard"></i> Meu Painel</a>
                                    </li>
                                <?php endif; ?>
                                <?php if (usuario_logado()->is_aluno) : ?>
                                    <li>
                                        <a href="<?php echo site_url("home/aluno") ?> ">
                                            <i class="fa fa-book"></i> Meus Cursos</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("adm/aluno") ?> ">
                                            <i class="fa fa-dashboard"></i> Meu Painel</a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a href="<?php echo site_url("usuarios/editarusuariologado") ?> ">
                                        <i class="fa fa-wrench"></i> Atualizar meus dados</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("logout") ?>">
                                        <i class="fa fa-arrow-circle-left"></i> Sair</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- header right menu end -->
            </div>
            <!--header search panel start -->
            <div class="ttr-search-bar">
                <form class="ttr-search-form">
                    <div class="ttr-search-input-wrapper">
                        <input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
                        <button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
                    </div>
                    <span class="ttr-search-close ttr-search-toggle">
                        <i class="ti-close"></i>
                    </span>
                </form>
            </div>
            <!--header search panel end -->
        </div>
    </header>
    <!-- header end -->
    <!-- Left sidebar menu start -->
    <div class="ttr-sidebar">
        <div class="ttr-sidebar-wrapper content-scroll">
            <!-- side menu logo start -->
            <div class="ttr-sidebar-logo">
                <a href="#"><img alt="" src="<?php echo site_url('src/admin/') ?>assets/images/logo.png" width="122" height="27"></a>
                <div class="ttr-sidebar-toggle-button">
                    <i class="ti-arrow-left"></i>
                </div>
            </div>
            <!-- side menu logo end -->
            <!-- sidebar menu start -->
            <?php if (usuario_logado()->is_admin === true) : ?>
                <nav class="ttr-sidebar-navi">
                    <ul>
                        <li>
                            <a href="<?php echo site_url('adm'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-dashboard"></i></span>
                                <span class="ttr-label">Painel</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('grupos'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-wrench"></i></span>
                                <span class="ttr-label">Grupos & Permissões</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('cursos'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-book"></i></span>
                                <span class="ttr-label">Cursos</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('mensagens'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-paper-plane"></i></span>
                                <span class="ttr-label">Mensagens</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('calendario'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-calendar"></i></span>
                                <span class="ttr-label">Calendário</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('usuarios'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-users"></i></span>
                                <span class="ttr-label">Usuários</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('usuarios/uetps'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-address-book"></i></span>
                                <span class="ttr-label">UETP's</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('usuarios/alunos'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-graduation-cap"></i></span>
                                <span class="ttr-label">Alunos</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('relatorios'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-paste"></i></span>
                                <span class="ttr-label">Relatórios</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('perfil'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-user"></i></span>
                                <span class="ttr-label">Meu perfil</span>
                            </a>
                        </li>
                        <li class="ttr-seperate"></li>
                        <li>
                            <a href="<?php echo site_url('usuarios/editarusuariologado'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-edit"></i></span>
                                <span class="ttr-label">Atualizar meus dados</span>
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end -->
                </nav>

            <?php elseif (usuario_logado()->is_uetp === true) : ?>
                <nav class="ttr-sidebar-navi">
                    <ul>
                        <li>
                            <a href="<?php echo site_url('adm/uetp'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-dashboard"></i></span>
                                <span class="ttr-label">Painel</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('mensagens'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-paper-plane"></i></span>
                                <span class="ttr-label">Mensagens</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('relatorios/meusrelatorios'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-paste"></i></span>
                                <span class="ttr-label">Meus Relatórios</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('relatorios/criar'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-newspaper-o"></i></span>
                                <span class="ttr-label">Enviar Relatório</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('perfil'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-user"></i></span>
                                <span class="ttr-label">Meu perfil</span>
                            </a>
                        </li>
                        <li class="ttr-seperate"></li>
                        <li>
                            <a href="<?php echo site_url('usuarios/editarusuariologado'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-edit"></i></span>
                                <span class="ttr-label">Atualizar meus dados</span>
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end -->
                </nav>

            <?php elseif (usuario_logado()->is_secretaria === true) : ?>
                <nav class="ttr-sidebar-navi">
                    <ul>
                        <li>
                            <a href="<?php echo site_url('adm/uetp'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-dashboard"></i></span>
                                <span class="ttr-label">Painel</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('mensagens'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-paper-plane"></i></span>
                                <span class="ttr-label">Mensagens</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('adm/cursos'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-book"></i></span>
                                <span class="ttr-label">Gerenciar Cursos</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('usuarios'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-users"></i></span>
                                <span class="ttr-label">Gerenciar Usuários</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('perfil'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-user"></i></span>
                                <span class="ttr-label">Meu perfil</span>
                            </a>
                        </li>
                        <li class="ttr-seperate"></li>
                        <li>
                            <a href="<?php echo site_url('usuarios/editarusuariologado'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-edit"></i></span>
                                <span class="ttr-label">Atualizar meus dados</span>
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end -->
                </nav>

            <?php elseif (usuario_logado()->is_professor === true) : ?>
                <nav class="ttr-sidebar-navi">
                    <ul>
                        <li>
                            <a href="<?php echo site_url('adm/professor'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-dashboard"></i></span>
                                <span class="ttr-label">Painel do Professor</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('mensagens'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-paper-plane"></i></span>
                                <span class="ttr-label">Mensagens</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('adm/cursos'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-book"></i></span>
                                <span class="ttr-label">Gerenciar Cursos</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('perfil'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-user"></i></span>
                                <span class="ttr-label">Meu perfil</span>
                            </a>
                        </li>
                        <li class="ttr-seperate"></li>
                        <li>
                            <a href="<?php echo site_url('usuarios/editarusuariologado'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-edit"></i></span>
                                <span class="ttr-label">Atualizar meus dados</span>
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end -->
                </nav>

            <?php elseif (usuario_logado()->is_aluno === true) : ?>
                <nav class="ttr-sidebar-navi">
                    <ul>
                        <li>
                            <a href="<?php echo site_url('adm/aluno'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-dashboard"></i></span>
                                <span class="ttr-label">Painel do Aluno</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('mensagens'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-paper-plane"></i></span>
                                <span class="ttr-label">Mensagens</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('home/aluno'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-book"></i></span>
                                <span class="ttr-label">Meus Cursos</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('perfil'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-user"></i></span>
                                <span class="ttr-label">Meu perfil</span>
                            </a>
                        </li>
                        <li class="ttr-seperate"></li>
                        <li>
                            <a href="<?php echo site_url('usuarios/editarusuariologado'); ?>" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fa fa-edit"></i></span>
                                <span class="ttr-label">Atualizar meus dados</span>
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end -->
                </nav>
            <?php endif; ?>
            <!-- sidebar menu end -->
        </div>
    </div>
    <!-- Left sidebar menu end -->

    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title"><?php echo strtoupper(usuario_logado()->login); ?></h4>
                <ul class="db-breadcrumb-list">
                    <li><?php echo $titulo; ?></li>
                </ul>
            </div>

            <?php echo $this->include('Layout/_mensagens') ?>

            <?php echo $this->renderSection('conteudo'); ?>

        </div>
    </main>
    <div class="ttr-overlay"></div>

    <!-- External JavaScripts -->
    <script src="<?php echo site_url('src/admin/') ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/counter/waypoints-min.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/counter/counterup.min.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/masonry/masonry.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/masonry/filter.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src='<?php echo site_url('src/admin/') ?>assets/vendors/scroll/scrollbar.min.js'></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/js/functions.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/vendors/chart/chart.min.js"></script>
    <script src="<?php echo site_url('src/admin/') ?>assets/js/admin.js"></script>
    <script src='<?php echo site_url('src/admin/') ?>assets/vendors/calendar/moment.min.js'></script>
    <script src='<?php echo site_url('src/admin/') ?>assets/vendors/calendar/fullcalendar.js'></script>

    <script>
        const hoje = new Date();

        function formatDate(date, format) {
            const map = {
                mm: date.getMonth() + 1,
                dd: date.getDate(),
                aa: date.getFullYear().toString().slice(-2),
                aaaa: date.getFullYear()
            }

            return format.replace(/mm|dd|aa|aaaa/gi, matched => map[matched])
        }

        formatDate(hoje, 'dd/mm/aaaa');



        $(document).ready(function() {


            $('#calendar').fullCalendar({

                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: hoje,
                navLinks: true, // can click day/week names to navigate views

                weekNumbers: true,
                weekNumbersWithinDays: true,
                weekNumberCalculation: 'ISO',

                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [{
                        title: 'All Day Event',
                        start: '2022-12-25'
                    },
                    {
                        title: 'Long Event',
                        start: '2022-03-07',
                        end: '2022-03-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2022-03-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2022-03-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2019-03-11',
                        end: '2022-03-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2022-03-12T10:30:00',
                        end: '2022-03-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2022-03-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2022-03-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2022-03-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2022-03-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2022-03-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2022-03-28'
                    }
                ]
            });

        });
    </script>

    <!-- Render custom scripts -->
    <?php echo $this->renderSection('scripts'); ?>

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
            });
        })

        $('.alert').alert();
    </script>

</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin// by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>