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
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="wm-courses-getting-started">
                    <div class="wm-title-full d-flex">
                        <h2><a class="btn btn-warning" href="<?php echo site_url("aulas/disciplinadetalhes/$aula->id_disciplina") ?>"><?php echo $aula->disciplina_nome ?> <i class="fa fa-arrow-circle-left"></i></a></h2>

                    </div>
                    <div class="wm-courses-started">
                        <span><i class="fa fa-book"></i> <?php echo $aula->titulo ?></span>
                        <h6><a href="#">
                                <?php echo $aula->descricao; ?></a></h6>
                        <span><a href="#" class="wmicon-time2"></a><time><?php echo date('Y'); ?></time></span>
                        <iframe width="560" height="315" src="<?php echo $aula->recurso ?>" title="video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share:0; controls:0" allowfullscreen></iframe>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>