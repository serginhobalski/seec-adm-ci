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
                <h4>Detalhes de <?php echo $usuario->nome; ?></h4>
            </div>
            <div class="widget-inner">
                <form class="edit-profile m-b30">
                    <div class="">
                        <div class="form-group row">
                            <div class="col-12 card-img-top">
                                <?php if ($usuario->imagem == null) : ?>
                                    <img src="<?php echo site_url('src/') ?>assets/images/itq.jpg" width="200px" alt=""><br>
                                <?php else : ?>
                                    <img src="<?php echo site_url("usuarios/imagem/$usuario->imagem"); ?>" width="200px" alt=""><br>
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo site_url("usuarios/editarimagem/$usuario->imagem"); ?>" class="btn btn-outline-info btn-sm">Alterar imagem</a>
                        </div>

                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome da unidade</label>
                            <div class="col-sm-7">
                                <h4><?php echo $usuario->nome; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tipo</label>
                            <div class="col-sm-7">
                                <?php if ($usuario->admin == 0) : ?>
                                    <h3>UETP</h3>
                                <?php else : ?>
                                    <h3>Administrador</h3>
                                <?php endif; ?>
                                <span class="help">*UETP: Unidade de Ensino Teológico-Pastoral.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Cidade/Bairro</label>
                            <div class="col-sm-7">
                                <h4><?php echo $usuario->local; ?></h4>
                            </div>
                        </div>

                        <div class="seperator"></div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Login</label>
                            <div class="col-sm-7">
                                <h4><?php echo $usuario->login; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Senha</label>
                            <div class="col-sm-7">
                                <h4><?php echo $usuario->password; ?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-7">
                                <?php if ($usuario->email == 0) : ?>
                                    <h3>Nenhum e-mail cadastrado.</h3>
                                <?php else : ?>
                                    <h4><?php echo $usuario->email; ?></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telefone</label>
                            <div class="col-sm-7">
                                <?php if ($usuario->telefone == 0) : ?>
                                    <h3>Nenhum telefone cadastrado.</h3>
                                <?php else : ?>
                                    <h4><?php echo $usuario->telefone; ?></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Data de cadastro</label>
                            <div class="col-sm-7">
                                <h4><?php echo date('d/m/Y - H:i', strtotime($usuario->criado_em)); ?></h4>
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
                                            <a class="dropdown-item" href="<?php echo site_url("usuarios/editar/$usuario->id"); ?>"><i class="ti-pencil-alt"></i> Editar</a>
                                            <a class="dropdown-item" href="<?php echo site_url("usuarios/excluir/$usuario->id"); ?>">
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