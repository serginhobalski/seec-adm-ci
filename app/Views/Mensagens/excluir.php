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
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="email-wrapper">

                <?php echo $this->include('Mensagens/_barra_menu.php'); ?>

                <div class="mail-list-container">

                    <?php echo $this->include('Mensagens/_mail_toolbar.php'); ?>

                    <div id="entrada" class="mail-box-list" active>


                        <?php echo form_open("mensagens/excluir/$mensagem->id") ?>

                        <div class="alert alert-warning">
                            <h3>Deseja realmente excluir esta mensagem?</h3>
                        </div>


                        <div class="form-group mt-5 mb-4 d-flex">

                            <input id="btn-salvar" type="submit" value="Sim, pode excluir" class="btn btn-danger mr-2">
                            <a class="btn" href="<?php echo site_url("mensagens"); ?>"><i class="ti-arrow-left"></i> Cancelar</a>

                        </div>

                        <?php echo form_close(); ?>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>


<?php $this->endSection(); ?>