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
            <div class="wc-title" style="background-color: #01012f;">
                <h4 style="color:#f5a425;">Meu Perfil</h4>
            </div>
            <div class="widget-inner">
                <form id="form" class="edit-profile m-b30">
                    <div class="">
                        <div class="form-group row text-center">
                            <div class="col-6 card-img-top">
                                <?php if (usuario_logado()->imagem == null) : ?>
                                    <img src="<?php echo site_url('src/') ?>assets/images/user-avatar.png" width="200px" alt=""><br>
                                <?php else : ?>
                                    <img src="<?php echo site_url("usuarios/imagem/" . usuario_logado()->imagem); ?>" width="200px" alt=""><br>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label"><b> Nome</b></label>
                            <div class="col-sm-12">
                                <h2><b><?php echo strtoupper(usuario_logado()->nome); ?></b></h2>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Tipo de acesso</label>
                            <div class="col-sm-12">
                                <?php if (usuario_logado()->is_admin === true) : ?>
                                    <h3><b>Administrador</b> </h3>
                                <?php elseif (usuario_logado()->is_uetp === true) : ?>
                                    <h3><b>UETP</b> </h3>
                                    <span class="help text-info">*UETP: Unidade de Ensino Teológico-Pastoral.</span>
                                    <span class="help text-info">*Possui acesso às áreas de diretores de ITQ, CTMQ ou MQTI.</span>

                                <?php elseif (usuario_logado()->is_professor === true) : ?>
                                    <h3><b>Professor</b> </h3>
                                    <span class="help text-info">*Possui acesso às áreas de gerenciamento de cursos e alunos sob sua tutela.</span>

                                <?php elseif (usuario_logado()->is_aluno === true) : ?>
                                    <h3><b>Aluno</b> </h3>
                                    <span class="help text-info">*Possui acesso às áreas dos cursos nos quais está matriculado.</span>

                                <?php elseif (usuario_logado()->is_secretaria === true) : ?>
                                    <h3><b>Secretaria</b> </h3>
                                    <span class="help text-info">*Possui acesso às áreas de gerenciamento de cursos, alunos e professores.</span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Login</label>
                            <div class="col-sm-12">
                                <h3><b><?php echo usuario_logado()->login; ?></b></h3>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">E-mail</label>
                            <div class="col-sm-12">
                                <?php if (usuario_logado()->email === "" || usuario_logado()->email === null) : ?>
                                    <h3>Nenhum e-mail cadastrado...</h3>
                                <?php else : ?>
                                    <h3><b><?php echo usuario_logado()->email; ?></b></h3>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Telefone</label>
                            <div class="col-sm-12">
                                <?php if (usuario_logado()->telefone === "" || usuario_logado()->telefone === null) : ?>
                                    <h3>Nenhum telefone cadastrado...</h3>
                                <?php else : ?>
                                    <h3><b><?php echo usuario_logado()->telefone; ?></b></h3>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Local</label>
                            <div class="col-sm-12">
                                <?php if (usuario_logado()->local === "" || usuario_logado()->local === null) : ?>
                                    <h3>Nenhum local cadastrado... </h3>
                                <?php else : ?>
                                    <h3><b><?php echo usuario_logado()->local; ?></b></h3>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Status</label>
                            <div class="col-sm-12">
                                <h3><b><?php echo usuario_logado()->exibeSituacao(); ?></b></h3>
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