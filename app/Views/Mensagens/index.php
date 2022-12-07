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

                    <div id="entrada" class="mail-box-list" active>
                        <?php foreach ($mensagens as $mensagem) : ?>


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
                                    <h6><?php echo anchor("mensagens/exibirrecebida/$mensagem->mensagem_id", esc($mensagem->usuario), 'title="Exibir mensagem"') ?></h6>
                                </div>
                                <div class="mail-list-title-info">
                                    <p><?php echo $mensagem->assunto ?></p>
                                </div>
                                <div class="mail-list-time">
                                    <span><?php echo date("d/m/Y - H:i", strtotime($mensagem->criado_em)) ?></span>
                                </div>
                                <ul class="mailbox-toolbar">
                                    <li data-toggle="tooltip" title="Deletar">
                                        <a href="<?php echo site_url("mensagens/excluir/$mensagem->mensagem_id") ?>">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </li>
                                    <li data-toggle="tooltip" title="Visualizar">
                                        <a href="<?php echo site_url("mensagens/exibirrecebida/$mensagem->mensagem_id") ?>">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </li>
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