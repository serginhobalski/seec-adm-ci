<?php echo $this->extend('Aulas/base_aulas'); ?>


<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>


<!-- Custom styles -->
<?php echo $this->section('estilos'); ?>
<?php $this->endSection(); ?>


<!-- Custom header -->
<?php echo $this->section('header'); ?>
<?php $this->endSection(); ?>


<!-- Custom page content -->
<?php
/*
<?php foreach ($disciplinas as $disciplina) : ?>
<?php echo $disciplina->disciplina_nome; ?>
<?php echo $disciplina->disciplina_descricao; ?>
<?php endforeach; ?>
*/
?>
<?php echo $this->section('conteudo'); ?>

<div class="wm-main-section">
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <div class="widget widget_course-price">
                    <ul>

                        <?php foreach ($disciplinas as $disciplina) : ?>

                            <li><a href="#"><i class=" wmicon-book2"></i>
                                    <?php echo $disciplina->disciplina_nome; ?>
                                </a>
                            </li>

                        <?php endforeach; ?>

                    </ul>
                </div>

                <div class="widget widget_professor-info">
                    <div class="wm-widget-title">
                        <h2>Intrutores</h2>
                    </div>
                    <figure>
                        <a href="#"><img style="border-radius: 50%; width: 50px;" src="<?php echo site_url('lms/') ?>extra-images/sof.jpg" alt=""></a>
                    </figure>
                    <div class="wm-Professor-info">
                        <h6><a href="#">Sergio Filho</a></h6>
                        <span>Instrutor</span>
                    </div>
                    <p></p>
                    <a class="wm-read-more" href="#">--</a>
                </div>
            </aside>
            <div class="col-md-9">

                <div class="wm-courses-getting-started">
                    <div class="wm-title-full">
                        <h2><?php echo $curso->nome ?></h2>
                    </div>
                    <div class="wm-courses-started">
                        <span><i class="fa fa-book"></i> <?php echo $curso->nome ?></span>
                        <ul class="wm-courses-started-listing">
                            <?php foreach ($disciplinas as $disciplina) : ?>
                                <li>
                                    <a href="#" class="wmicon-pen"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="#">
                                                <?php echo $disciplina->disciplina_nome; ?></a></h6>
                                        <span><a href="#" class="wmicon-time2"></a><time><?php echo date('Y'); ?></time></span>
                                        <span><a href="#" class=" wmicon-clock2"></a><time datetime="2017-02-14"></time></span>
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a href="#">Abrir</a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>

                <div class="wm-courses-author-info">
                    <div class="wm-title-full">
                        <h2>Instrutores</h2>
                    </div>
                    <ul>
                        <li>
                            <div class="wm-author-detail wm-courses-authorinfo">
                                <figure>
                                    <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/sof.jpg" alt=""></a>
                                </figure>
                                <div class="wm-author-text">
                                    <h5><a href="#">Sergio Filho</a></h5>
                                    <span>Professor</span>
                                    <p></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-author-detail wm-courses-authorinfo">
                                <figure>
                                    <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/eao.jpg" alt=""></a>
                                </figure>
                                <div class="wm-author-text">
                                    <h5><a href="#">Eurides Obalski</a></h5>
                                    <span>Professora</span>
                                    <p></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>