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
                <div class="email-menu-bar">
                    <div class="compose-mail">
                        <a href="mailbox-compose.html" class="btn btn-block">Escrever</a>
                    </div>
                    <div class="email-menu-bar-inner">
                        <ul>
                            <li class="active"><a href=""><i class="fa fa-envelope-o"></i>Entrada <span class="badge badge-success">8</span></a></li>
                            <li><a href=""><i class="fa fa-send-o"></i>Enviadas</a></li>
                            <li><a href=""><i class="fa fa-trash-o"></i>Excluídas</a></li>
                        </ul>
                    </div>
                </div>
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
                                <li><a href="#"><i class="fa fa-trash-o"></i> Excluir</a></li>
                                <li><a href="#"><i class="fa fa-arrow-down"></i> Archive</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> Snooze</a></li>
                                <li><a href="#"><i class="fa fa-envelope-open"></i> Mark as unread</a></li>
                            </ul>
                        </div>
                        <div class="next-prev-btn">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="mail-box-list">
                        <?php foreach ($mensagens as $mensagem) : ?>

                            <?php // if ($mensagem === null) : 
                            ?>
                            <!-- <div class="mail-list-info text-center">
                                    <br><br>
                                    <p>Caixa de mensagens vazia...</p>
                                </div> -->
                            <?php // else : 
                            ?>

                            <div class="mail-list-info">
                                <div class="checkbox-list">
                                    <div class="custom-control custom-checkbox checkbox-st1">
                                        <input type="checkbox" class="custom-control-input" id="check2">
                                        <label class="custom-control-label" for="check2"></label>
                                    </div>
                                </div>
                                <div class="mail-rateing">
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="mail-list-title">
                                    <h6><?php echo $mensagem->destinatario ?></h6>
                                </div>
                                <div class="mail-list-title-info">
                                    <p><?php echo $mensagem->assunto ?></p>
                                </div>
                                <div class="mail-list-time">
                                    <span><?php echo date("d/m/Y - H:i", strtotime($mensagem->criado_em)) ?></span>
                                </div>
                                <ul class="mailbox-toolbar">
                                    <li data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></li>
                                    <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
                                    <li data-toggle="tooltip" title="Snooze"><i class="fa fa-clock-o"></i></li>
                                    <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li>
                                </ul>
                            </div>

                            <?php // endif;
                            ?>

                        <?php endforeach; ?>

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