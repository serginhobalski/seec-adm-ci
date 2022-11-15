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

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="background-image:url(<?php echo site_url('src/') ?>assets/images/background/bg2.jpg);">
                <a href="/"><img src="<?php echo site_url('src/') ?>assets/images/logo-white.png" alt=""></a>
            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="heading-bx left">
                        <h2 class="title-head">Faça login com <span>sua conta</span></h2>
                        <p>Não possui acesso? <a href="#">fale conosco</a></p>
                    </div>
                    <?php echo form_open('/', ['id' => 'form', 'class' => 'contact-bx']); ?>

                    <div id="response"></div>

                    <?php echo $this->include('Layout/_mensagens') ?>

                    <div class="row placeani">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Seu login</label>
                                    <input name="login" type="text" required="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Sua senha</label>
                                    <input name="password" type="password" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group form-forget">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Lembar</label>
                                </div>
                                <a href="#" class="ml-auto">Esqueceu a senha?</a>
                            </div>
                        </div>
                        <div class="col-lg-12 m-b30">
                            <input id="btn-login" name="btn-login" type="submit" value="Entrar" class="btn button-md">
                        </div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
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

    <script>
        $(document).ready(function() {

            $("#form").on('submit', function(e) {

                e.preventDefault();

                $.ajax({

                    type: 'POST',
                    url: '<?php echo site_url('login/criar'); ?>',
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $("#response").html('');
                        $("#btn-login").val('Processando requisição...');
                    },
                    success: function(response) {
                        $("#btn-login").val('Salvar');
                        $("#btn-login").removeAttr("disabled");

                        $('[name=csrf_test_name]').val(response.token);

                        if (!response.erro) {

                            // Tudo certo! Pode redirecionar!
                            window.location.href = "<?php echo site_url(); ?>" + response.redirect;

                        }
                        if (response.erro) {
                            // Existem erros de validação

                            $("#response").html('<div class="alert alert-danger">' + response.erro + '</div>');

                            if (response.erros_model) {

                                $.each(response.erros_model, function(key, value) {

                                    $("#response").append('<ul class="list-unstyled"><li class"text-danger">' + value + '</li></ul>')

                                });

                            }

                        }
                    },
                    error: function() {
                        alert('Não foi possível processar a solicitação');
                        $("#btn-login").val('Salvar');
                        $("#btn-login").removeAttr("disabled");
                    },

                });

            });

            $("#form").submit(function() {

                $(this).find(":submit").attr('disabled', 'disabled');

            });

        });
    </script>
</body>

</html>