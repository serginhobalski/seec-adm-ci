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
<?php echo $this->section('conteudo'); ?>

<div class="wm-main-section">
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <div class="widget widget_course-price">
                    <div class="wm-widget-heading">
                        <h4>Valor</h4>
                    </div>
                    <span><small>R$ <?php echo $curso->valor + 95; ?>,00</small>
                        R$ <?php echo implode(',', explode('.', $curso->valor)); ?></span>
                    <a href="#">Inscrever-se</a>
                    <ul>
                        <li><a href="#"><i class=" wmicon-social7"></i>
                                Alunos: <?php echo ''; ?></a></li>
                        <li><a href="#"><i class=" wmicon-clock2"></i><time datetime="<?php $hoje = date('d/m/Y - H:i') ?>">
                                    <?php echo $hoje ?></time></a></li>
                        <li><a href="#"><i class=" wmicon-book2"></i>
                                Disciplinas: <?php echo $qtd_disciplinas; ?>
                            </a>
                        </li>
                        <li><a href="#"><i class="fa fa-tags"></i>
                                <?php echo strtoupper($curso->categoria) ?>
                            </a></li>
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
                <div class="wm-blog-single wm-courses">
                    <figure class="wm-detail-thumb">
                        <img src="<?php echo site_url('lms/') ?>extra-images/our-courses1.jpg" alt="">
                    </figure>
                    <div class="wm-blog-author wm-ourcourses">
                        <div class="wm-blogauthor-left">
                            <img style="width: 50px;" src="<?php echo site_url('lms/') ?>extra-images/sof.jpg" alt="">
                            <a class="wm-authorpost" href="#">Sergio Filho</a>
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
                        <h2><?php echo $curso->nome ?></h2>
                    </div>
                    <p class="wm-text">
                        <?php echo $curso->descricao ?>
                    </p>
                    <div class="wm-course-blockquote-two">
                        <blockquote>Nossa missão é formar líderes para impactar o mundo através do Evangelho de Cristo.</blockquote>
                        <span>- Eurides Obalski</span>
                    </div>
                    <div class="wm-courses-info">
                        <div class="wm-title-full">
                            <h2>Disciplinas do módulo</h2>
                        </div>
                        <ul>
                            <?php foreach ($disciplinas as $disciplina) : ?>
                                <li>
                                    <a href="#" class="wmicon-lock"></a>
                                    <?php echo $disciplina->disciplina_nome; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="wm-courses-getting-started">
                    <div class="wm-title-full">
                        <h2><?php echo $curso->nome ?></h2>
                    </div>
                    <div class="wm-courses-started">
                        <span><i class="fa fa-book"></i> <?php echo $curso->nome ?></span>
                        <ul class="wm-courses-started-listing">
                            <?php foreach ($disciplinas as $disciplina) : ?>
                                <li>
                                    <a href="<?php echo site_url("aulas/disciplinadetalhes/$disciplina->disciplina_id") ?>" class="wmicon-pen"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="<?php echo site_url("aulas/disciplinadetalhes/$disciplina->disciplina_id") ?>">
                                                <?php echo $disciplina->disciplina_nome; ?></a></h6>
                                        <span><a href="#" class="wmicon-time2"></a><time><?php echo date('Y'); ?></time></span>
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a href="<?php echo site_url("aulas/disciplinadetalhes/$disciplina->disciplina_id") ?>">Abrir</a>
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

                <div class="wm-title-full">
                    <h2>Módulos Relacionados</h2>
                </div>
                <div class="wm-courses wm-courses-popular">
                    <ul class="row">
                        <?php foreach ($modulos as $modulo) : ?>
                            <li class="col-md-4">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="<?php echo site_url("aulas/cursodetalhes/$modulo->id") ?>"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-1.jpg" alt=""> <span class="wm-popular-hover"> <small>Visualizar</small> </span> </a>
                                        <figcaption>
                                            <img style="width: 50px;" src="<?php echo site_url('lms/') ?>extra-images/sof.jpg" alt="">
                                            <h6><a href="#">Sergio Filho</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#">
                                                <?php echo $modulo->nome ?></a></h6>
                                        <div class="wm-courses-price">
                                            <span>
                                                R$ <?php echo implode(',', explode('.', $modulo->valor)) ?>
                                            </span>
                                        </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social7"></i>-</a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i>-</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
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