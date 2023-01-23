<?php echo $this->extend('Aulas/base_aulas'); ?>

<!-- Renderização de título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<!-- Renderização de Estilos -->
<?php echo $this->section('estilos'); ?>
<?php $this->endSection(); ?>

<!-- Renderização de conteúdo -->
<?php echo $this->section('conteudo'); ?>
<div class="wm-main-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-filter-box">

                    <div class="feature-filters clearfix center m-b40">
                        <ul class="filters" data-toggle="buttons">
                            <li data-filter="" class="btn active">
                                <input type="radio">
                                <a href="#"><span>Todos</span></a>
                            </li>
                            <li data-filter="itq" class="btn">
                                <input type="radio">
                                <a href="#"><span>ITQ EAD</span></a>
                            </li>
                            <li data-filter="postulantes" class="btn">
                                <input type="radio">
                                <a href="#"><span>Postulantes</span></a>
                            </li>
                            <li data-filter="ministerial" class="btn">
                                <input type="radio">
                                <a href="#"><span>Ministerial</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wm-courses wm-courses-popular">
                    <ul class="row">

                        <?php foreach ($modulos as $modulo) : ?>

                            <li class="action-card col-md-4 <?php echo $modulo->categoria; ?>">
                                <div class="wm-courses-popular-wrap">
                                    <figure> <a href="<?php echo site_url("aulas/cursodetalhes/$modulo->id") ?>"><img src="<?php echo site_url("lms/") ?>extra-images/capa-curso-grid.jpg" alt=""> <span class="wm-popular-hover"> <small>Ver detalhes</small> </span> </a>
                                        <figcaption>
                                            <img style="width: 60px;" src="<?php echo site_url("lms/") ?>extra-images/sof.jpg" alt="">
                                            <h6><a href="#">Sergio Filho</a></h6>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-popular-courses-text">
                                        <h6><a href="#"><?php echo $modulo->nome ?></a></h6>
                                        <div class="wm-courses-price"> <span>R$ <?php echo implode(',', explode('.', $modulo->valor)) ?></span> </div>
                                        <ul>
                                            <li><a href="#" class="wm-color"><strong><i class="fa fa-tag"></i> <?php echo strtoupper($modulo->categoria) ?></strong></a></li>
                                            <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> -</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                        <?php endforeach; ?>

                    </ul>
                </div>
                <div class="wm-pagination">
                    <ul>
                        <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>...</li>
                        <li><a href="#">18</a></li>
                        <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>

<!-- Renderização de Scripts -->
<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>