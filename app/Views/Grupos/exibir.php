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
                <h4>Detalhes de <?php echo $grupo->nome; ?></h4>
            </div>
            <div class="widget-inner">
                <form class="edit-profile m-b30">
                    <div class="">
                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome do grupo</label>
                            <div class="col-sm-7">
                                <h4><?php echo $grupo->nome; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-7">
                                <?php if ($grupo->exibir == 0) : ?>
                                    <h3>Grupo oculto para os usuários.</h3>
                                <?php else : ?>
                                    <h3>Grupo em exibição para os usuários</h3>
                                <?php endif; ?>
                                <span class="help">*Exibição em relação aos usuários sem acesso administrativo.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Descrição</label>
                            <div class="col-sm-7">
                                <h3><?php echo $grupo->descricao; ?></h3>
                            </div>
                        </div>

                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Data de cadastro</label>
                            <div class="col-sm-7">
                                <h4><?php echo date('d/m/Y - H:i', strtotime($grupo->criado_em)); ?></h4>
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
                                            <a class="dropdown-item" href="<?php echo site_url("grupos/editar/$grupo->id"); ?>"><i class="ti-pencil-alt"></i> Editar</a>
                                            <a class="dropdown-item" href="<?php echo site_url("grupos/permissoes/$grupo->id"); ?>"><i class="ti-settings"></i> Gerenciar permissões</a>
                                            <hr>
                                            <a class="dropdown-item" href="<?php echo site_url("grupos/excluir/$grupo->id"); ?>">
                                                <i class="ti-trash"></i> Excluir
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/grupos" class="btn btn-dark ml-3"><i class="ti-arrow-left"></i> Voltar</a>
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