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