<!DOCTYPE html>
<html lang="pt-br">
<!-- courses-list21:19  -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>SEEC-PA | <?php echo $this->renderSection('titulo'); ?></title>

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="<?php echo site_url('favicon.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('favicon.ico') ?>">

    <!-- Css Files -->
    <link href="<?php echo site_url('lms/') ?>css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/flaticon.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/slick-slider.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/prettyphoto.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>build/mediaelementplayer.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>style.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/color.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/color-two.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/color-three.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/color-four.css" rel="stylesheet" />
    <link href="<?php echo site_url('lms/') ?>css/responsive.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <?php echo $this->renderSection('estilos'); ?>

</head>

<body>
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
        <!--// Header \\-->
        <header id="wm-header" class="wm-header-one">
            <!--// TopStrip \\-->
            <div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="wm-stripinfo">
                                <li>
                                    <i class="wmicon-location"></i>
                                    Trav. Timbó, 1.212, Pedreira, Belem / PA
                                </li>
                                <li><i class="wmicon-technology4"></i>(91) 999188-2198</li>
                                <li>
                                    <i class="wmicon-clock2"></i> Seg - Sex: 07:00 - 19:00
                                </li>
                            </ul>
                            <ul class="wm-adminuser-section">
                                <?php if (!usuario_logado()) : ?>
                                    <li>
                                        <a href="<?php echo site_url('login') ?>">login</a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#ModalOpcoes"><?php echo usuario_logado()->nome; ?></a>
                                    </li>
                                <?php endif; ?>
                                <!-- <li>
                                    <a href="#">Contato</a>
                                </li> -->
                                <li>
                                    <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="wm-logo"><img src="<?php echo site_url('lms/') ?>images/logo.png" alt="" /></a>
                        </div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Navegação</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active">
                                            <a href="<?php echo site_url('/') ?>">
                                                <i class="fa fa-home"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('aulas/cursos') ?>">
                                                <i class="fa fa-book"></i> Cursos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-dashboard"></i> Painel
                                            </a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="<?php echo site_url('aulas') ?>">Painel</a></li>
                                                <li>
                                                    <a href="<?php echo site_url('aulas/mensagens') ?>">Mensagens</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('aulas/cursos') ?>">Meus Cursos</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('aulas/perfil') ?>">Perfil</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-cart-plus"></i> Loja de Cursos
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                            <?php if (!usuario_logado()) : ?>
                                <a href="<?php echo site_url("login") ?>" class="wm-header-btn">Entrar</a>
                            <?php else : ?>
                                <a href="#" class="wm-header-btn"><?php echo usuario_logado()->nome ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->
        </header>
        <!--// Header \\-->

        <!--// Mini Header \\-->
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1><?php echo $titulo; ?></h1>
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Cursos</a></li>
                                <li><?php echo $titulo ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Mini Header \\-->

        <!--// Main Content \\-->
        <div class="wm-main-content">
            <!--// Main Section \\-->

            <?php echo $this->renderSection('conteudo'); ?>

            <!--// Main Section \\-->
        </div>
        <!--// Main Content \\-->

        <!--// Footer \\-->
        <footer id="wm-footer" class="wm-footer-one">
            <!--// FooterNewsLatter \\-->
            <div class="wm-footer-newslatter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <!-- <i class="wmicon-interface2"></i>
                                <input type="text" value="Cadastra" onblur="if(this.value == '') { this.value ='Digite seu e-mail'; }" onfocus="if(this.value =='Digite seu e-mail') { this.value = ''; }" />
                                <input type="submit" value="" /> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterNewsLatter \\-->

            <!--// FooterWidgets \\-->
            <div class="wm-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget widget_contact_info col-md-8">
                            <a href="#" class="wm-footer-logo"><img src="<?php echo site_url('lms/') ?>images/logo.png" alt="" /></a>
                            <ul>
                                <li>
                                    <i class="wm-color wmicon-pin"></i>
                                    Trav. Timbó, 1212, Pedreira <br>
                                    Belém / PA
                                </li>
                                <li>
                                    <i class="wm-color wmicon-phone"></i>
                                    (91) 99188-2198 <br />
                                    (91) 99981-2198
                                </li>
                                <li>
                                    <i class="wm-color wmicon-letter"></i>
                                    <a href="mailto:ead@seecpa.com.br">ead@seecpa.com.br</a>
                                </li>
                            </ul>
                            <div class="wm-footer-icons">
                                <a href="#" class="wmicon-social5"></a>
                                <a href="#" class="wmicon-social4"></a>
                                <a href="#" class="wmicon-social3"></a>
                                <a href="#" class="wmicon-vimeo"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_gallery col-md-4">
                            <div class="wm-footer-widget-title">
                                <h5>Instrutores</h5>
                            </div>
                            <ul class="gallery">
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galery-sof.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/sof.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a title="" data-rel="prettyPhoto[gallery1]" href="<?php echo site_url('lms/') ?>extra-images/widget-galery-eao.jpg"><img src="<?php echo site_url('lms/') ?>extra-images/eao.jpg" alt="" /></a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// FooterWidgets \\-->

            <!--// FooterCopyRight \\-->
            <div class="wm-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span><i class="fa fa-clock-o"></i> <?php echo date('d/m/Y - H:i') ?> </span>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <a target="_blank" href="#">SEEC-PA</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterCopyRight \\-->
        </footer>
        <!--// Footer \\-->

        <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Login -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="wm-modallogin-form wm-login-popup">
                        <span class="wm-color">Faça login</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Seu login" onblur="if(this.value == '') { this.value ='Seu login'; }" onfocus="if(this.value =='Seu login') { this.value = ''; }" />
                                </li>
                                <li>
                                    <input type="password" value="Senha" onblur="if(this.value == '') { this.value ='Senha'; }" onfocus="if(this.value =='Senha') { this.value = ''; }" />
                                </li>
                                <li>
                                    <a href="#" class="wm-forgot-btn">Esqueceu a senha?</a>
                                </li>
                                <li><input type="submit" value="Logar" /></li>
                            </ul>
                        </form>
                        <span class="wm-color">ou use sua rede social</span>
                        <ul class="wm-login-social-media">
                            <li>
                                <a href="#"><i class="wmicon-social5"></i> Facebook</a>
                            </li>
                            <li class="wm-twitter-color">
                                <a href="#"><i class="wmicon-social4"></i> twitter</a>
                            </li>
                            <li class="wm-googleplus-color">
                                <a href="#"><i class="fa fa-google-plus-square"></i> Google+</a>
                            </li>
                        </ul>
                        <p>Not a member yet? <a href="#">Cadastre-se já!</a></p>
                    </div>
                    <div class="wm-modallogin-form wm-register-popup">
                        <span class="wm-color">Crie sua conta</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Seu login" onblur="if(this.value == '') { this.value ='Seu login'; }" onfocus="if(this.value =='Seu login') { this.value = ''; }" />
                                </li>
                                <li>
                                    <input type="text" value="Seu E-mail" onblur="if(this.value == '') { this.value ='Seu E-mail'; }" onfocus="if(this.value =='Seu E-mail') { this.value = ''; }" />
                                </li>
                                <li>
                                    <input type="password" value="Senha" onblur="if(this.value == '') { this.value ='Senha'; }" onfocus="if(this.value =='Senha') { this.value = ''; }" />
                                </li>
                                <li>
                                    <input type="text" value="Confirme a senha" onblur="if(this.value == '') { this.value ='Confirme a senha'; }" onfocus="if(this.value =='Confirme a senha') { this.value = ''; }" />
                                </li>
                                <li><input type="submit" value="Cadastrar" /></li>
                            </ul>
                        </form>
                        <span class="wm-color">or signup with your socials:</span>
                        <ul class="wm-login-social-media">
                            <li>
                                <a href="#"><i class="wmicon-social5"></i> Facebook</a>
                            </li>
                            <li class="wm-twitter-color">
                                <a href="#"><i class="wmicon-social4"></i> twitter</a>
                            </li>
                            <li class="wm-googleplus-color">
                                <a href="#"><i class="fa fa-google-plus-square"></i> Google+</a>
                            </li>
                        </ul>
                        <p>Possui login? <a href="#">Entre aqui!</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Login -->

    <!-- ModalLogin Opções -->
    <div class="modal fade" id="ModalOpcoes" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="wm-modallogin-form wm-login-popup">
                        <?php if (!usuario_logado()) : ?>
                            <ul>
                                <li>
                                    <a href="<?php echo site_url('login') ?>">
                                        <i class="fa fa-user"></i> Entrar
                                    </a>
                                </li>
                            </ul>
                        <?php else : ?>
                            <span class="wm-color">Opções de <?php echo usuario_logado()->nome ?></span>
                            <ul>
                                <?php if (usuario_logado()->is_admin === true) : ?>
                                    <li>
                                        <a href="<?php echo site_url('adm') ?>">
                                            <i class="fa fa-dashboard"></i> ADM
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('aulas') ?>">
                                            <i class="fa fa-book"></i> Aulas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('aulas/cursosgeral') ?>">
                                            <i class="fa fa-book"></i> Todos os Cursos
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <hr>
                                <li>
                                    <a href="<?php echo site_url('perfil') ?>">
                                        <i class="fa fa-user"></i> Perfil
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('home/editarusuariologado') ?>">
                                        <i class="fa fa-upload"></i> Atualizar dados
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('logout') ?>">
                                        <i class="fa fa-arrow-circle-left"></i> Sair
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Opções -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="wm-modallogin-form">
                        <span class="wm-color">Faça sua pesquisa</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Palavra..." onblur="if(this.value == '') { this.value ='Palavra...'; }" onfocus="if(this.value =='Palavra...') { this.value = ''; }" />
                                </li>
                                <li><input type="submit" value="Pesquisar" /></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalSearch Box -->

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/jquery.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/jquery.prettyphoto.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/fitvideo.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/skills.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/slick.slider.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/waypoints-min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>build/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="<?php echo site_url('lms/') ?>script/functions.js"></script>
    <!-- Custom Scripts -->
    <?php echo $this->renderSection('scripts'); ?>
</body>

<!-- courses-list21:19  -->

</html>