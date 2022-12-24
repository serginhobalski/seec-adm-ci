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
                    <h4><?php echo $titulo ?></h4>
                    <div class="wm-apply-select">
                    </div>
                </div>
                <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                    <ul class="row">
                        <li class="col-md-12">
                            <div class="wm-courses-popular-wrap">
                                <div class="wm-popular-courses-text">
                                    <h6>
                                        <a href="#">Realização de avaliações</a>
                                    </h6>
                                    <p>
                                        Atenção, <?php echo usuario_logado()->nome; ?>! <br> Não se esqueça de responder todas as autoatividades e as avaliações!
                                    </p>
                                    <div class="wm-courses-price"><span></span></div>
                                    <ul>
                                        <li>
                                            <a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a>
                                        </li>
                                        <li>
                                            <a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a>
                                        </li>
                                        <li>
                                            <a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a>
                                        </li>
                                        <li>
                                            <a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a>
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
                                <i class="wmicon-arrows4"></i> Anterior</a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li>...</li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="wmicon-arrows4"></i> Próximo</a>
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