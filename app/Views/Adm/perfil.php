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
                <h4>Perfil de <?php echo 'Usuário' ?></h4>
            </div>
            <div class="widget-inner">
                <form id="form" class="edit-profile m-b30">
                    <div class="">
                        <div class="form-group row">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Nome</label>
                            <div class="col-sm-12">
                                <h3><?php echo usuario_logado()->nome ?></h3>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Tipo de acesso</label>
                            <div class="col-sm-12">
                                <?php if (usuario_logado()->is_admin === true) : ?>
                                    <h3>Administrador</h3>
                                <?php elseif (usuario_logado()->is_uetp === true) : ?>
                                    <h3>UETP</h3>
                                    <span class="help text-info">*UETP: Unidade de Ensino Teológico-Pastoral.</span>
                                <?php elseif (usuario_logado()->is_professor === true) : ?>
                                    <h3>Professor</h3>
                                <?php elseif (usuario_logado()->is_aluno === true) : ?>
                                    <h3>Aluno</h3>
                                <?php elseif (usuario_logado()->is_secretaria === true) : ?>
                                    <h3>Secretaria</h3>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">E-mail</label>
                            <div class="col-sm-12">
                                <?php if (usuario_logado()->email = "") : ?>
                                    <h3>Nenhum e-amil cadastrado...</h3>
                                <?php else : ?>
                                    <h3><?php echo usuario_logado()->email ?></h3>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Telefone</label>
                            <div class="col-sm-12">
                                <?php if (usuario_logado()->email = "") : ?>
                                    <h3>Nenhum telefone cadastrado...</h3>
                                <?php else : ?>
                                    <h3><?php echo usuario_logado()->telefone ?></h3>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Local</label>
                            <div class="col-sm-12">
                                <?php if (usuario_logado()->email = "") : ?>
                                    <h3>Nenhum local cadastrado... </h3>
                                <?php else : ?>
                                    <h3><?php echo usuario_logado()->local ?></h3>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Status</label>
                            <div class="col-sm-12">
                                <h3><?php echo usuario_logado()->exibeSituacao(); ?></h3>
                            </div>
                        </div>

                        <script>
                            function goBack() {
                                window.history.back()
                            }
                        </script>

                        <body>
                            <button class="btn" onclick="goBack()">
                                <i class="fa fa-arrow-circle-left"></i> Voltar
                            </button>
                        </body>
                </form>

            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>


<?php $this->endSection(); ?>