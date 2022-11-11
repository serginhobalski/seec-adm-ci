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
                <h4>Permissões do grupo <?php echo $grupo->nome; ?></h4>
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
                            <label class="col-sm-2 col-form-label">Permissões</label>
                            <div class="col-sm-7">
                                <?php if (empty($grupo->permissoes) || $grupo->permissoes == null) : ?>
                                    <h3>Este grupo não possui nenhuma permissão de gerenciamento.</h3>
                                <?php else : ?>
                                    <div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Permissão</th>
                                                    <th>Excluir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($grupo->permissoes as $permissao) : ?>
                                                    <tr>
                                                        <td><?php echo esc($permissao->nome); ?></td>
                                                        <td><a href="#"><i class="ti-trash text-danger"></i></a></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php endif; ?>
                                <span class="help">*Permissões de acesso do grupo.</span>
                            </div>
                        </div>


                        <div class="seperator"></div>


                    </div>
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-7 d-flex">
                                    <?php if ($grupo->id == 1) : ?>
                                        <a href="/grupos" class="btn btn-dark ml-3"><i class="ti-arrow-left"></i> Voltar</a>
                                    <?php else : ?>
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
                                    <?php endif; ?>
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