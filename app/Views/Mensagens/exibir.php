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
            <div class="email-wrapper">

                <?php echo $this->include('Mensagens/_barra_menu.php'); ?>

                <div class="mail-list-container">

                    <?php echo $this->include('Mensagens/_mail_toolbar.php'); ?>

                    <div class="mailbox-view">
                        <div class="mailbox-view-title">
                            <h5 class="send-mail-title"><?php echo $mensagem->assunto ?></h5>
                        </div>
                        <div class="send-mail-details">
                            <div class="d-flex">
                                <div class="send-mail-user">
                                    <div class="send-mail-user-pic">
                                        <img src="assets/images/user-avatar.png" alt="">
                                    </div>
                                    <div class="send-mail-user-info">
                                        <h4><?php echo $mensagem->nome ?></h4>
                                        <h5><?php echo $mensagem->email ?></h5>
                                    </div>
                                </div>
                                <div class="ml-auto send-mail-full-info">
                                    <div class="time">
                                        <span>
                                            <?php echo $mensagem->criado_em ?>
                                        </span>
                                    </div>
                                    <span class="btn btn-info-icon">Responder</span>
                                    <div class="dropdown all-msg-toolbar ml-auto">
                                        <span class="btn btn-info-icon" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="fa fa-trash-o"></i> Deletar</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="read-content-body">
                                <h5 class="read-content-title"><?php echo $mensagem->assunto ?></h5>
                                <p><strong><?php echo $mensagem->destinatario_id ?></strong>
                                    <?php echo $mensagem->mensagem ?>
                                </p>
                                <p class="read-content-name"><?php echo $mensagem->nome ?></p>
                                <hr>
                                <hr>
                                <div class="form-group">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>


<?php $this->endSection(); ?>