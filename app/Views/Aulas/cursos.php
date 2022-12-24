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

            <?php echo $this->include('Aulas/_menu.php'); ?>

            <div class="col-md-8">
                <div class="wm-filter-box">
                    <h3><?php echo $titulo ?></h3>
                </div>
                <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                    <ul class="row">


                        <li class="col-md-12">
                            <div class="wm-courses-popular-wrap">
                                <figure>
                                    <a href="#"><img src="<?php echo site_url('lms/') ?>extra-images/papular-courses-1.jpg" alt="" />
                                        <span class="wm-popular-hover">
                                            <small>Ver curso</small>
                                        </span>
                                    </a>
                                    <figcaption>
                                        <img style="width: 70px;" src="<?php echo site_url('lms/') ?>extra-images/sof.jpg" alt="" />
                                        <h6><a href="#">Sergio Filho</a></h6>
                                    </figcaption>
                                </figure>
                                <div class="wm-popular-courses-text">
                                    <h6>
                                        <a href="#">Módulo ITQ EAD</a>
                                    </h6>
                                    <p>
                                        Módulo do Instituto Teológico Quadrangular EAD.
                                    </p>
                                    <div class="wm-courses-price"><span>-</span></div>
                                    <ul>
                                        <li>
                                            <a href="#" class="wm-color"><i class="wmicon-social7"></i> -</a>
                                        </li>
                                        <li>
                                            <a href="#" class="wm-color"><i class="wmicon-social6"></i> -</a>
                                        </li>
                                        <li>
                                            <a href="#" class="wm-color"><i class="wmicon-time2"></i> -</a>
                                        </li>
                                        <li>
                                            <a href="#" class="wm-color"><i class="wmicon-location"></i> -</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="wm-pagination">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous">
                                <i class="wmicon-arrows4"></i> Previous</a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>...</li>
                        <li><a href="#">18</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="wmicon-arrows4"></i> Next</a>
                        </li>
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