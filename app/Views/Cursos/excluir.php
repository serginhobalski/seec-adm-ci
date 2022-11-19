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
    <div class="col-12">

        <?php echo form_open("cursos/excluir/$curso->id") ?>

        <div class="alert alert-warning">
            <h3>Deseja realmente excluir este registro?</h3>
        </div>


        <div class="form-group mt-5 mb-4 d-flex">

            <input id="btn-salvar" type="submit" value="Sim, pode excluir" class="btn btn-danger mr-2">
            <a class="btn" href="<?php echo site_url("cursos/exibir/$curso->id"); ?>"><i class="ti-arrow-left"></i> Cancelar</a>

        </div>

        <?php echo form_close(); ?>

    </div>


</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>

<?php $this->endSection(); ?>