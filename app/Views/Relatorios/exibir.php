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
                <h4>Relatório de <?php echo $relatorio->nome; ?></h4>
            </div>
            <div class="widget-inner">
                <form class="edit-profile m-b30">
                    <div class="">

                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome da unidade</label>
                            <div class="col-sm-7">
                                <h4><?php echo $relatorio->nome; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mês</label>
                            <div class="col-sm-7">
                                <h4><?php echo $relatorio->mes; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Ano</label>
                            <div class="col-sm-7">
                                <h4><?php echo $relatorio->ano; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Cidade/Bairro</label>
                            <div class="col-sm-7">
                                <?php if ($relatorio->local == null || $relatorio->local == '') : ?>
                                    <h4>Local não informado.</h4>
                                <?php else : ?>
                                    <h4><?php echo $relatorio->local; ?></h4>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Valor</label>
                            <div class="col-sm-7">
                                <h4><?php echo 'R$ ' . implode(',', explode('.', $relatorio->valor)); ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Comprovante</label>
                            <div class="col-sm-7">
                                <?php if ($relatorio->comprovante == null || $relatorio->comprovante == '') : ?>
                                    <h4>Comprovante não anexado.</h4>
                                <?php else : ?>
                                    <h4><?php echo $relatorio->comprovante; ?></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Relatório</label>
                            <div class="col-sm-7">
                                <?php if ($relatorio->relatorio == null || $relatorio->relatorio == '') : ?>
                                    <h4>Relatório não anexado.</h4>
                                <?php else : ?>
                                    <h4><?php echo $relatorio->relatorio; ?></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Data de cadastro</label>
                            <div class="col-sm-7">
                                <h4><?php echo date('d/m/Y - H:i', strtotime($relatorio->criado_em)); ?></h4>
                            </div>
                        </div>


                    </div>
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-7 d-flex">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                            Ações
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo site_url("usuarios/editar/$relatorio->id"); ?>"><i class="ti-pencil-alt"></i> Editar</a>
                                            <a class="dropdown-item" href="<?php echo site_url("usuarios/excluir/$relatorio->id"); ?>">
                                                <i class="ti-trash"></i> Excluir
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/usuarios" class="btn btn-dark ml-3"><i class="ti-arrow-left"></i> Voltar</a>
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