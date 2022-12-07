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
                            <h5 class="send-mail-title"><?php echo $mensagem[0]->assunto
                                                        ?></h5>
                        </div>
                        <div class="send-mail-details">
                            <div class="d-flex">
                                <div class="send-mail-user">
                                    <div class="send-mail-user-pic">
                                        <!-- <img src="assets/images/user-avatar.png" alt=""> -->
                                        <?php if ($mensagem[0]->imagem != "") : ?>
                                            <img alt="" src="<?php echo site_url("usuarios/imagem/" . $mensagem[0]->imagem); ?>" width="32" height="32">
                                        <?php else : ?>
                                            <img alt="" src="<?php echo site_url('src/assets/images/user-avatar.png') ?>" width="32" height="32">
                                        <?php endif; ?>
                                    </div>
                                    <div class="send-mail-user-info">
                                        <h4><?php echo $mensagem[0]->usuario ?></h4>
                                        <h5><?php echo $mensagem[0]->email ?></h5>
                                    </div>
                                </div>
                                <div class="ml-auto send-mail-full-info">
                                    <div class="time">
                                        <span>
                                            <?php echo $mensagem[0]->criado_em ?>
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
                                <h5 class="read-content-title"><?php echo $mensagem[0]->assunto ?></h5>
                                <p><strong><?php echo $mensagem[0]->usuario ?></strong>
                                    <?php echo $mensagem[0]->mensagem ?>
                                </p>
                                <p class="read-content-name"><?php echo $mensagem[0]->usuario ?></p>
                                <hr>

                                <hr>
                                <!-- <div class="form-group">
                                    <h6>Mensagem de resposta</h6>
                                    <div class="m-b15">
                                        <textarea class="form-control"> </textarea>
                                    </div>
                                    <button class="btn">Responder</button>
                                </div> -->
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