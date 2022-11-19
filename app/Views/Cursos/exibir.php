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

        <div id="response"></div>

        <div class="widget-box">
            <div class="wc-title">
                <h4>Detalhes de <?php echo $curso->nome; ?></h4>
            </div>
            <div class="widget-inner">
                <form class="edit-profile m-b30">
                    <div class="">
                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome do Curso</label>
                            <div class="col-sm-7">
                                <h4><?php echo $curso->nome; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="categoria" class="form-label">Categoria do Curso</label>
                                <h4 id="categoria"><?php echo strtoupper($curso->categoria); ?></h4>
                            </div>
                            <div class="col-sm-6">
                                <label for="valor" class="form-label">Valor</label>
                                <h4 id="valor">R$ <?php echo implode(",", explode(".", $curso->valor)); ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-7 d-flex">
                                <?php if ($curso->deletado_em == null) : ?>
                                    <h3><?php echo $curso->exibeSituacao(); ?></h3>
                                    <a tabindex="0" class="text-primary" role="button" data-toggle="popover" data-trigger="focus" title="Importante!" data-content="<b>*Curso Ativo</b> = disponível como opção para atribuir a usuários do sistema em geral. <br> <b>*Curso Inativo</b> = não está disponível aos usuários."><i class="fa fa-info-circle"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Descrição</label>
                            <div class="col-sm-7">
                                <h3><?php echo $curso->descricao; ?></h3>
                            </div>
                        </div>

                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Data de cadastro</label>
                            <div class="col-sm-7">
                                <h4><?php echo date('d/m/Y - H:i', strtotime($curso->criado_em)); ?></h4>
                            </div>
                        </div>

                    </div>
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-7 d-flex">
                                    <?php if ($curso->id > 1) : ?>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                Ações
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?php echo site_url("cursos/editar/$curso->id"); ?>"><i class="ti-pencil-alt"></i> Editar</a>
                                                <hr>
                                                <a class="dropdown-item" href="<?php echo site_url("cursos/excluir/$curso->id"); ?>">
                                                    <i class="ti-trash"></i> Excluir
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?php echo site_url("cursos") ?>" class="btn btn-dark ml-3"><i class="ti-arrow-left"></i> Voltar</a>
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