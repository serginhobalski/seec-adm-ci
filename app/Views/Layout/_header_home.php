<!-- Header Top ==== -->
<header class="header rs-nav header-transparent" style="height: 128px;">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul>
                        <li>
                            <a href="faq-1.html"><i class="fa fa-question-circle"></i>Informações</a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fa fa-envelope-o"></i>ead@seecpa.com.br</a>
                        </li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul>
                        <?php if (usuario_logado() === null) : ?>
                            <li><a class="btn btn-success" href="login"><i class="fa fa-user"></i> Login</a></li>
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