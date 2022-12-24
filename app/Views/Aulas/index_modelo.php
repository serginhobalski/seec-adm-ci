<?php echo $this->extend('Aulas/base_aulas'); ?>


<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>


<!-- Custom styles -->
<?php echo $this->section('estilos'); ?>
<?php $this->endSection(); ?>


<!-- Custom header -->
<?php echo $this->section('header'); ?>
<?php $this->endSection(); ?>


<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>

<div class="wm-main-section">

</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>