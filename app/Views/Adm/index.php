<?php echo $this->extend('Layout/adm'); ?>

<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>

<!-- Calendar -->
<?php echo $this->section('calendar'); ?>
<link href="<?php echo site_url('src') ?>/fullcalendar/css/fullcalendar.min.css" rel='stylesheet' />
<?php $this->endSection(); ?>


<!-- Custom styles -->
<?php echo $this->section('estilos'); ?>
<!-- FULLCALENDAR CSS ============================================= -->
<link href='<?php echo site_url('src') ?>/fullcalendar/css/core/main.min.css' rel='stylesheet' />
<link href='<?php echo site_url('src') ?>/fullcalendar/css/daygrid/main.min.css' rel='stylesheet' />
<script src='<?php echo site_url('src') ?>/fullcalendar/js/core/main.min.js'></script>
<script src='<?php echo site_url('src') ?>/fullcalendar/js/interaction/main.min.js'></script>
<script src='<?php echo site_url('src') ?>/fullcalendar/js/daygrid/main.min.js'></script>
<script src='<?php echo site_url('src') ?>/fullcalendar/js/core/locales/pt-br.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'pt-br',
            plugins: ['interaction', 'dayGrid'],
            //defaultDate: '2019-04-12',
            editable: true,
            eventLimit: true,
            events: 'list_eventos.php',
            extraParams: function() {
                return {
                    cachebuster: new Date().valueOf()
                };
            }
        });

        calendar.render();
    });
</script>
<?php $this->endSection(); ?>


<?php echo $this->section('load-calendario'); ?>
<!-- start loader calendario -->
<div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner">
            <div class="loader"></div>
        </div>
    </div>
</div>
<!-- end loader calendario -->
<?php $this->endSection(); ?>


<!-- Custom header -->
<?php echo $this->section('header'); ?>
<h1><?php echo $titulo; ?></h1>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>

<!-- Área de Cards -->
<div class="row">
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg1">
            <div class="wc-item">
                <h4 class="wc-title">
                    Relatórios <br>
                    Enviados
                </h4>
                <span class="wc-des">
                    Nº total
                </span>
                <span class="wc-stats">
                    <span class="counter"><?php echo $relatorios; ?></span>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg2">
            <div class="wc-item">
                <h4 class="wc-title">
                    Usuários
                </h4>
                <span class="wc-des">
                    cadastrados
                </span>
                <span class="wc-stats counter">
                    <?php echo $usuarios; ?>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg5">
            <div class="wc-item">
                <h4 class="wc-title">
                    UETPs
                </h4>
                <span class="wc-des">
                    cadastradas
                </span>
                <span class="wc-stats counter">
                    <?php echo $uetps; ?>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg4">
            <div class="wc-item">
                <h4 class="wc-title">
                    Alunos
                </h4>
                <span class="wc-des">
                    cadastrados
                </span>
                <span class="wc-stats counter">
                    <?php echo $alunos; ?>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg4">
            <div class="wc-item">
                <h4 class="wc-title">
                    Administradores
                </h4>
                <span class="wc-des">
                    Nº total
                </span>
                <span class="wc-stats">
                    <span class="counter"><?php echo $admins; ?></span>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg1">
            <div class="wc-item">
                <h4 class="wc-title">
                    Professores
                </h4>
                <span class="wc-des">
                    cadastrados
                </span>
                <span class="wc-stats counter">
                    <?php echo $professores; ?>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg2">
            <div class="wc-item">
                <h4 class="wc-title">
                    Secretarios
                </h4>
                <span class="wc-des">
                    cadastradas
                </span>
                <span class="wc-stats counter">
                    <?php echo $secretarios; ?>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg7">
            <div class="wc-item">
                <h4 class="wc-title">
                    Cursos <br>
                </h4>
                <span class="wc-des">
                    total
                </span>
                <span class="wc-stats counter">
                    <?php echo $quantidadeCursos; ?>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        --
                    </span>
                    <span class="wc-number ml-auto">
                        --
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Áera do Calendário -->
<div class="row">
    <div class="col-lg-12 m-b30">
        <div class="widget-box">

            <div class="wc-title">
                <h4>CALENDÁRIO</h4>
            </div>
            <div class="widget-inner">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>

<?php $this->endSection(); ?>