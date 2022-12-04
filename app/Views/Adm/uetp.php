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
<div class="container">
    <h4>Informações de Usuário</h4>
    <p>Nome: <?php echo usuario_logado()->nome; ?></p>
    <p>Local: <?php echo usuario_logado()->local; ?></p>
    <p>E-mail: <?php echo usuario_logado()->email; ?></p>
    <p>Telefone: <?php echo usuario_logado()->telefone; ?></p>
    <p>Login: <?php echo usuario_logado()->login; ?></p>
</div>
<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>