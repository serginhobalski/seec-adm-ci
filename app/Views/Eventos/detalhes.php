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
            <div class="wc-title">
                <h4>Detalhes de <?php echo $evento->titulo; ?></h4>
            </div>
            <div class="widget-inner">
                <form class="edit-profile m-b30">
                    <div class="">
                        <div class="form-group row text-center">
                            <div class="col-6 card-img-top">
                                <img src="<?php echo site_url("eventos/imagem/$evento->imagem"); ?>" width="500px" alt=""><br>
                            </div>
                        </div>

                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome do evento</label>
                            <div class="col-sm-7">
                                <h4><?php echo $evento->titulo; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tipo</label>
                            <div class="col-sm-7">
                                <h3 class="text-success"><?php echo $evento->tipo ?></h3>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-7">
                                <h3 class="text-success"><?php echo $evento->status ?></h3>
                            </div>
                        </div>
                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Local</label>
                            <div class="col-sm-7">
                                <h4><?php echo $evento->local; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Início</label>
                            <div class="col-sm-7">
                                <h4>
                                    <?php echo date("d/m/Y | ", strtotime($evento->data_inicio)); ?>
                                    <?php echo date("H:i", strtotime($evento->hora_inicio)); ?>
                                </h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Término</label>
                            <div class="col-sm-7">
                                <h4>
                                    <?php echo date("d/m/Y | ", strtotime($evento->data_termino)); ?>
                                    <?php echo date("H:i", strtotime($evento->hora_termino)); ?>
                                </h4>
                            </div>
                        </div>

                        <hr class="seperator">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Detalhes</label>
                            <div class="col-sm-7">
                                <p><?php echo $evento->descricao; ?></p>
                                <p><?php echo $evento->detalhes; ?></p>
                            </div>
                        </div>


                    </div>
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-7 d-flex">
                                    <a href="<?php echo site_url('adm/uetp') ?>" class="btn btn-dark ml-3"><i class="ti-arrow-left"></i> Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>