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
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('src/admin/') ?>assets/images/favicon.png" />

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
                        <a href="..//" class="ttr-material-button ttr-submenu-toggle">HOME</a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle">MENU <i class="fa fa-angle-down"></i></a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <li><a href="/relatorios">Relatórios</a></li>
                                <li><a href="/usuarios">Usuários</a></li>
                                <li><a href="/mensagens">Mensagens</a></li>
                                <li><a href="/calendario">Calendário</a></li>
                                <li><a href="/perfil">Perfil</a></li>
                            </ul>
                        </div>
                    </li>
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
                        <a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="<?php echo site_url('src/admin/') ?>assets/images/testimonials/pic3.jpg" width="32" height="32"></span></a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <li><a href="/perfil">Meu perfil</a></li>
                                <li><a href="/relatorios">Relatórios</a></li>
                                <li><a href="/mensagens">Mensagens</a></li>
                                <li><a href="/logout">Sair</a></li>
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
                <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
                <div class="ttr-sidebar-toggle-button">
                    <i class="ti-arrow-left"></i>
                </div>
            </div>
            <!-- side menu logo end -->
            <!-- sidebar menu start -->
            <nav class="ttr-sidebar-navi">
                <ul>
                    <li>
                        <a href="/adm" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-home"></i></span>
                            <span class="ttr-label">Dashborad</span>
                        </a>
                    </li>
                    <li>
                        <a href="/cursos" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-book"></i></span>
                            <span class="ttr-label">Cursos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-email"></i></span>
                            <span class="ttr-label">Mensagens</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="/mensagens" class="ttr-material-button"><span class="ttr-label">Mail Box</span></a>
                            </li>
                            <li>
                                <a href="/mensagens" class="ttr-material-button"><span class="ttr-label">Compose</span></a>
                            </li>
                            <li>
                                <a href="mailbox-read.html" class="ttr-material-button"><span class="ttr-label">Mail Read</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-calendar"></i></span>
                            <span class="ttr-label">Calendário</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="/calendario" class="ttr-material-button"><span class="ttr-label">Basic Calendar</span></a>
                            </li>
                            <li>
                                <a href="/calendario" class="ttr-material-button"><span class="ttr-label">List View</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
                            <span class="ttr-label">Usuários</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="/usuarios" class="ttr-material-button"><span class="ttr-label">Listar Usuários</span></a>
                            </li>
                            <li>
                                <a href="/grupos" class="ttr-material-button"><span class="ttr-label">Grupos de acesso</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/relatorios" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
                            <span class="ttr-label">Relatórios</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-user"></i></span>
                            <span class="ttr-label">Meu perfil</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="/perfil" class="ttr-material-button"><span class="ttr-label">User Profile</span></a>
                            </li>
                            <li>
                                <a href="/perfil" class="ttr-material-button"><span class="ttr-label">Teacher Profile</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="ttr-seperate"></li>
                </ul>
                <!-- sidebar menu end -->
            </nav>
            <!-- sidebar menu end -->
        </div>
    </div>
    <!-- Left sidebar menu end -->

    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="/adm"><i class="fa fa-home"></i>Home</a></li>
                    <li><?php echo $titulo; ?></li>
                </ul>
            </div>

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
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: '2022-11-01',
                navLinks: true, // can click day/week names to navigate views

                weekNumbers: true,
                weekNumbersWithinDays: true,
                weekNumberCalculation: 'ISO',

                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [{
                        title: 'All Day Event',
                        start: '2019-03-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2019-03-07',
                        end: '2019-03-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2019-03-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2019-03-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2019-03-11',
                        end: '2019-03-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2019-03-12T10:30:00',
                        end: '2019-03-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2019-03-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2019-03-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2019-03-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2019-03-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2019-03-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2019-03-28'
                    }
                ]
            });

        });
    </script>

    <!-- Render custom scripts -->
    <?php echo $this->renderSection('scripts'); ?>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin// by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>