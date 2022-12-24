<?php echo $this->extend('Aulas/base_aulas'); ?>

<!-- Renderização de título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<!-- Renderização de Estilos -->
<?php echo $this->section('estilos'); ?>
<?php $this->endSection(); ?>

<!-- Renderização de conteúdo -->
<?php echo $this->section('conteudo'); ?>
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">

                <?php echo $this->include('Aulas/_menu.php'); ?>

                <div class="col-md-8">
                    <div class="wm-student-profile-info">
                        <div class="wm-student-dashboard-profile">
                            <div class="wm-plane-title">
                                <h2>Sobre mim</h2>
                            </div>
                            <ul class="row">
                                <li class="col-md-4">
                                    <div class="wm-student-profile">
                                        <a class=wm-circle-icon href="#"><i class="wmicon-telephone"></i></a>
                                        <div class="wm-student-profile-text">
                                            <span>Telefone:</span>

                                            <a href="#"><?php echo usuario_logado()->telefone ?></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-student-profile">
                                        <a class=wm-circle-icon href="#"><i class="wmicon-web2"></i></a>
                                        <div class="wm-student-profile-text">
                                            <span>E-mail:</span>
                                            <a href="#"><?php echo usuario_logado()->email ?></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-student-profile">
                                        <a class=wm-circle-icon href="#"><i class="fa fa-graduation-cap"></i></a>
                                        <div class="wm-student-profile-text">
                                            <span>Tutor:</span>
                                            <a href="#"><?php echo $instrutor ?></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-student-profile">
                                        <a class=wm-circle-icon href="#"><i class="fa fa-location-arrow"></i></a>
                                        <div class="wm-student-profile-text">
                                            <span>Local:</span>
                                            <a href="#"><?php echo usuario_logado()->local ?></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-student-profile">
                                        <a class=wm-circle-icon href="#"><i class="fa fa-user-secret"></i></a>
                                        <div class="wm-student-profile-text">
                                            <span>Login:</span>
                                            <a href="#"><?php echo usuario_logado()->login ?></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-student-profile">
                                        <a class=wm-circle-icon href="#"><i class="fa fa-calendar"></i></a>
                                        <div class="wm-student-profile-text">
                                            <span>Cadastro:</span>
                                            <a href="#"><?php echo date('d/m/Y | H:i', strtotime(usuario_logado()->criado_em)) ?></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p>.</p>
                        </div>
                        <div class="wm-profile-info">
                            <div class="wm-title-full">
                                <h5>Painel de cursos</h5>
                            </div>
                            <div class="wm-article">
                                <ul>
                                    <li class="wm-profile-info-right">
                                        <span>Cursos adquiridos</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="wm-article">
                                <ul>
                                    <li class="wm-profile-start">
                                        <div class="wm-profile-detail-info">
                                            <h6><a href="#">Nome do Curso</a></h6>
                                            <span>Descrição do curso.</span>
                                        </div>
                                    </li>
                                    <li><a href="#" class="wm-edit-icon">
                                            ID: 0000</a>
                                    </li>
                                    <li><a href="#" class="wm-edit-icon">
                                            <i class="fa fa-eye"></i>Ver</a>
                                    </li>
                                </ul>
                                <form class="wm-profile-info-search">
                                    <input type="text" onfocus="if(this.value =='Enter text here ...') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter text here ...'; }" value="Enter text here ...">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<?php $this->endSection(); ?>

<!-- Renderização de Scripts -->
<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>