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

<div class="row">
    <div class="col-lg-12 m-b30">
        <a class="btn" href="/avisos/criar"><i class="fa fa-save"></i> Cadastrar Aviso</a>
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
                <?php if (!$avisos) : ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            <strong>
                                Nenhum evento cadastrado até o momento...
                            </strong>
                        </td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($avisos as $aviso) : ?>
                        <tr>
                            <td class="text-primary">
                                <img src="<?php echo site_url("eventos/imagem/$aviso->imagem")  ?>" alt="" width="50px">
                            </td>
                            <td class="text-primary">
                                <?php echo anchor("eventos/exibir/$aviso->id", esc($aviso->titulo), 'title="Exibir ' . esc($aviso->titulo) . '"') ?>
                            </td>
                            <td class="text-primary"><?php echo $aviso->tipo ?></td>
                            <td class="text-primary"><?php echo date("d/m/Y", strtotime($aviso->data_inicio)) ?></td>
                            <td class="text-primary"><?php echo date("d/m/Y", strtotime($aviso->data_termino)) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>

<?php $this->endSection(); ?>