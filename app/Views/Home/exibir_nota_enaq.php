<?php echo $this->extend('Layout/site'); ?>

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
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>
<!-- Page content here -->
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(<?php echo site_url('src/') ?>assets/images/banner/banner2.jpg);">
        <div class="container">
            <div class="page-banner-entry pt-5">
                <br><br>
                <h1 class="text-white mt-5"><?php echo $titulo; ?></h1>
                <h3 class="text-white"><?php echo $subtitulo; ?></h3>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $titulo; ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->

    <div class="container">
        <center>
            <hr><br>
            <h3 class="text-primary"><?php echo $resultado->nome; ?></h3>
            <hr><br>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label class="form-label">Região do(a) poostulantes</label>
                    <h4><?php echo $resultado->local; ?></h4>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label class="form-label">Ano de realização da prova</label>
                    <h4><?php echo $resultado->ano; ?></h4>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label class="form-label">Nota da Prova Objetiva</label>
                    <h4><?php echo $resultado->prova; ?></h4>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label class="form-label">Nota da Redação</label>
                    <h4><?php echo $resultado->redacao; ?></h4>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label class="form-label">Média Final</label>
                    <h4><?php echo $resultado->media; ?></h4>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <label class="form-label">Resultado</label>
                    <h3 class="<?php echo ($resultado->media >= 7 ? 'text-success' : 'text-danger'); ?>">
                        <?php echo ($resultado->media >= 7 ? 'Aprovado(a)' : 'Reprovado(a)'); ?>
                    </h3>
                </div>
            </div>
            <div class="text-center">
                <hr><br>
                <a class="btn " title="Voltar" onclick="voltar()"><b class="text-white"><i class="fa fa-arrow-circle-left"></i> Voltar</b> </a>

                <script>
                    function voltar() {
                        window.history.back();
                    }
                </script>
                <br><br>
                <hr>
            </div>
        </center>
    </div>


</div>
<!-- Content END-->
<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>

<?php $this->endSection(); ?>