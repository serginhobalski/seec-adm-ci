<?php echo $this->extend('Layout/adm'); ?>

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

<!-- Área de Cards -->
<div class="row">
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <a href="<?php echo site_url("home/professor") ?>">
            <div class="widget-card widget-bg1">
                <div class="wc-item">
                    <h4 class="wc-title">
                        Minhas <br> Turmas
                    </h4>
                    <span class="wc-des">
                        Nº total
                    </span>
                    <span class="wc-stats">
                        <span class="counter">00</span>
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
        </a>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <a href="<?php echo site_url("mensagens") ?>">
            <div class="widget-card widget-bg2">
                <div class="wc-item">
                    <h4 class="wc-title">
                        Minhas <br> Mensagens
                    </h4>
                    <span class="wc-des">
                        Nº total
                    </span>
                    <span class="wc-stats">
                        <span class="counter">00</span>
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
        </a>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <a href="<?php echo site_url("home/professor") ?>">
            <div class="widget-card widget-bg4">
                <div class="wc-item">
                    <h4 class="wc-title">
                        Minhas <br> Tarefas
                    </h4>
                    <span class="wc-des">
                        Nº total
                    </span>
                    <span class="wc-stats">
                        <span class="counter">00</span>
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
        </a>
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

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>