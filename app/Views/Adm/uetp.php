<?php

use PharIo\Manifest\ComponentElement;

echo $this->extend('Layout/adm'); ?>

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
<!-- Header content here -->
<h1><?php echo $titulo; ?></h1>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>
<div class="row">
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg1">
            <div class="wc-item">
                <h4 class="wc-title">
                    Relatórios <br>
                    Enviados
                </h4>
                <span class="wc-des">
                    Nº total
                </span>
                <span class="wc-stats">
                    <span class="counter"><?php echo $relatorio; ?></span>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-9 col-xl-9 col-sm-12 col-12">
        <div class="widget-card widget-bg2">
            <div class="wc-item">
                <h4 class="wc-title">
                    Este é o seu espaço!
                </h4>
                <span class="wc-des">
                    ---
                </span>
                <span class="wc-stats">
                    <span class=""></span>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Áera do Calendário -->
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Calendário</h4>
            </div>
            <div class="widget-inner">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container text-center">
    <h5 class="text-dark"><i class="fa fa-info-circle" title="Dados do usuário logado"></i> Informações do Usuário:</h5>
    <p>Nome: <?php echo usuario_logado()->nome; ?> |
        Local: <?php echo usuario_logado()->local; ?> |
        E-mail: <?php echo usuario_logado()->email; ?> |
        Telefone: <?php echo usuario_logado()->telefone; ?> |
        Login: <?php echo usuario_logado()->login; ?></p>
</div>
<?php $this->endSection(); ?>

<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>