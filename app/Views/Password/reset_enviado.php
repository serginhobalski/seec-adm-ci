<?php echo $this->extend('Layout/Autenticacao/base_login'); ?>

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

<?php echo $this->include('Layout/_mensagens') ?>

<div class="account-container">
    <div class="heading-bx left">
        <h2 class="title-head">
            <span>Uma mensagem de recuperação de senha foi enviada para</span> seu e-mail.
        </h2>
        <p>Caso você não encontre a mensagem na sua caixa de entrada,
            Favor verificar em sua <b>Caixa de Spam</b>.
        </p>
    </div>
    <a class="btn" href="<?php echo site_url('home') ?>"><i class="fa fa-arrow-circle-left"></i> Voltar para o site</a>
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>