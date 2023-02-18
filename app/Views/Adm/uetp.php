<?php

use PharIo\Manifest\ComponentElement;

echo $this->extend('Layout/adm'); ?>

<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
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
<!-- Header content here -->
<h1><?php echo $titulo; ?></h1>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>
<div class="row">
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg4">
            <div class="wc-item">
                <h4 class="wc-title">
                    <a href="/relatorios/meusrelatorios">
                        Relatórios <br>
                        Enviados
                    </a>
                </h4>
                <span class="wc-des">
                    Nº total
                </span>
                <span class="wc-stats">
                    <span class="counter"><?php echo $relatorio; ?></span>
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
    <div class="col-md-12 col-lg-9 col-xl-9 col-sm-12 col-12">
        <div class="widget-card widget-bg2">
            <div class="wc-item">
                <h4 class="wc-title">
                    Este é o seu espaço!
                </h4>
                <span class="wc-des">
                    ---
                </span>
                <span class="wc-stats">
                    <span class=""></span>
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
<div class="row">
    <div class="col-lg-12 m-b30">
        <table id="ajaxTableEventos" class="table" style="width: 100%;">
            <thead>
                <tr>
                    <th class="text-primary">#</th>
                    <th class="text-primary">Evento</th>
                    <th class="text-primary">Tipo</th>
                    <th class="text-primary">Início</th>
                    <th class="text-primary">Término</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!$eventos) : ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            <strong>
                                Nenhum evento cadastrado até o momento...
                            </strong>
                        </td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($eventos as $evento) : ?>
                        <tr>
                            <td class="text-primary">
                                <img src="<?php echo site_url("eventos/imagem/$evento->imagem")  ?>" alt="" width="50px">
                            </td>
                            <td class="text-primary">
                                <?php echo anchor("eventos/detalhes/$evento->id", esc($evento->titulo), 'title="Exibir ' . esc($evento->titulo) . '"') ?>
                            </td>
                            <td class="text-primary"><?php echo $evento->tipo ?></td>
                            <td class="text-primary">
                                <?php echo date("d/m/Y | ", strtotime($evento->data_inicio)) ?>
                                <?php echo date("H:i", strtotime($evento->hora_inicio)) ?>
                            </td>
                            <td class="text-primary">
                                <?php echo date("d/m/Y | ", strtotime($evento->data_termino)) ?>
                                <?php echo date("H:i", strtotime($evento->hora_termino)) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>
<hr>
<div class="container text-center">
    <h5 class="text-dark"><i class="fa fa-info-circle" title="Dados do usuário logado"></i> Informações do Usuário:</h5>
    <p>Nome: <?php echo usuario_logado()->nome; ?> |
        Local: <?php echo usuario_logado()->local; ?> |
        E-mail: <?php echo usuario_logado()->email; ?> |
        Telefone: <?php echo usuario_logado()->telefone; ?> |
        Login: <?php echo usuario_logado()->login; ?></p>
</div>
<?php $this->endSection(); ?>

<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>