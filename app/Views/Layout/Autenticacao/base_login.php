<!DOCTYPE html>
<html lang="pt-br">


<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="SEEC-PA | Login" />

    <!-- OG -->
    <meta property="og:title" content="SEEC-PA | Login" />
    <meta property="og:description" content="SEEC-PA | Login" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="<?php echo site_url('src/admin/') ?>assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('src/admin/') ?>assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>SEEC-PA | Login </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="<?php echo site_url('src/') ?>assets/js/html5shiv.min.js"></script>
	<script src="<?php echo site_url('src/') ?>assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/assets.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="<?php echo site_url('src/') ?>assets/css/color/color-1.css">

    <!-- Render styles -->
    <?php echo $this->renderSection('estilos'); ?>

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="background-image:url(<?php echo site_url('src/') ?>assets/images/background/bg2.jpg);">
                <a href="/"><img src="<?php echo site_url('src/') ?>assets/images/logo-white.png" alt=""></a>
            </div>
            <div class="account-form-inner">

                <?php echo $this->include('Layout/_mensagens') ?>

                <?php echo $this->renderSection('conteudo'); ?>


            </div>
        </div>
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
    <script src='<?php echo site_url('src/') ?>assets/vendors/switcher/switcher.js'></script>

    <!-- Render custom scripts -->
    <?php echo $this->renderSection('scripts'); ?>

</body>

</html>