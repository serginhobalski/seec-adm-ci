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

            <div class="col-md-12">
                <div class="wm-blog-single wm-courses">
                    <figure class="wm-detail-thumb">
                        <img src="<?php echo site_url('lms/') ?>extra-images/our-courses1.jpg" alt="">
                    </figure>
                    <div class="wm-blog-author wm-ourcourses">
                        <div class="wm-blogauthor-left">
                            <img style="width: 50px;" src="<?php echo site_url('lms/') ?>extra-images/sof.jpg" alt="">
                            <a class="wm-authorpost" href="#"><?php echo $disciplina->nome ?></a>
                        </div>
                        <div class="wm-our-courses">
                            <ul>
                                <li>
                                    <a href="#"><i class="wmicon-tool2"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="wmicon-diploma"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="wmicon-symbol"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="wm-our-course-detail">
                    <div class="wm-title-full">
                        <h2> <a href=""><?php echo $disciplina->nome ?></a></h2>

                        <script>
                            function goBack() {
                                window.history.back()
                            }
                        </script>

                        <button class="btn btn-warning" onclick="goBack()"><i class="fa fa-arrow-circle-left"></i> Voltar</button>


                        <!-- <a class="btn btn-warning" href="<?php echo site_url("aulas/cursodetalhes/$disciplina->curso_id") ?>"><i class="fa fa-arrow-circle-left"></i> Voltar para o módulo</a> -->
                    </div>
                    <p class="wm-text">
                        <?php echo $disciplina->descricao ?>
                    </p>
                    <div class="wm-courses-info">
                        <div class="wm-title-full">
                            <h2>Aulas da Disciplina</h2>
                        </div>
                        <ul>
                            <?php foreach ($aulas as $aula) : ?>
                                <li>
                                    <a href="#" class="wmicon-lock"></a>
                                    <?php echo $aula->titulo; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="wm-courses-getting-started">
                    <div class="wm-title-full">
                        <h2><?php echo $disciplina->nome ?></h2>
                    </div>
                    <div class="wm-courses-started">
                        <span><i class="fa fa-book"></i> <?php echo $disciplina->nome ?></span>
                        <ul class="wm-courses-started-listing">
                            <?php foreach ($aulas as $aula) : ?>
                                <li>
                                    <a href="<?php echo site_url("aulas/auladetalhe/$aula->principal_id") ?>" class="wmicon-pen"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="<?php echo site_url("aulas/auladetalhe/$aula->principal_id") ?>">
                                                <?php echo $aula->titulo; ?></a></h6>
                                        <span><a href="#" class="wmicon-time2"></a><time><?php echo date('Y') ?></time></span>
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a href="<?php echo site_url("aulas/auladetalhe/$aula->principal_id") ?>">Abrir</a>
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