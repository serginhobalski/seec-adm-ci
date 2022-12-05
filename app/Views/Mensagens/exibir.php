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
                    <div class="mail-toolbar">
                        <div class="check-all">
                            <div class="custom-control custom-checkbox checkbox-st1">
                                <input type="checkbox" class="custom-control-input" id="check1">
                                <label class="custom-control-label" for="check1"></label>
                            </div>
                        </div>
                        <div class="mail-search-bar">
                            <input type="text" class="form-control" placeholder="Search" />
                        </div>
                        <div class="dropdown all-msg-toolbar">
                            <span class="btn btn-info-icon" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-eye"></i> Ver</a></li>
                                <li><a href="#"><i class="fa fa-trash-o"></i> Excluir</a></li>
                            </ul>
                        </div>
                        <div class="next-prev-btn">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>

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
                                <h6> <i class="fa fa-download m-r5"></i> Attachments <span>(3)</span></h6>
                                <div class="mailbox-download-file">
                                    <a href="#"><i class="fa fa-file-image-o"></i>
                                    </a>
                                    <a href="#"><i class="fa fa-file-text-o"></i></a>
                                    <a href="#"><i class="fa fa-file"></i></a>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h6>Mensagem de resposta</h6>
                                    <div class="m-b15">
                                        <textarea class="form-control"> </textarea>
                                    </div>
                                    <button class="btn">Responder</button>
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