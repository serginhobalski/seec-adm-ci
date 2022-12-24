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
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">

                <?php echo $this->include('Aulas/_menu.php'); ?>

                <div class="col-md-8">
                    <div class="wm-student-dashboard-statement wm-dashboard-statement">
                        <div class="wm-plane-title">
                            <h2><?php echo $titulo ?></h2>
                        </div>
                        <div class="wm-article">
                            <ul>
                                <li class="wm-statement-start wm-student">
                                    <span>Cursos adquiridos</span>
                                </li>
                                <li class="wm-student">
                                    <span>ID</span>
                                </li>
                                <li class="wm-student">
                                    <span>Ação</span>
                                </li>
                            </ul>
                        </div>
                        <div class="wm-article">
                            <ul>
                                <li class="wm-statement-start">
                                    <div class="wm-statement-started-text">
                                        <h6><a href="#">Curso de Exemplo</a></h6>
                                        <span><a href="#" class="wmicon-tag"></a>ITQ</span>
                                        <span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">16/05/2022</time></span>
                                    </div>
                                </li>
                                <li>
                                    <small>#234758</small>
                                </li>
                                <li>
                                    <a class="wm-dowmload" href="#" title="Visualizar o curso"><i class="fa fa-eye"></i>Abrir</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<?php $this->endSection(); ?>

<!-- Renderização de Scripts -->
<?php echo $this->section('scripts'); ?>
<?php $this->endSection(); ?>