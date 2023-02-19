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
                    <th class="text-primary">Aviso</th>
                    <th class="text-primary">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!$avisos) : ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            <strong>
                                Nenhum aviso cadastrado até o momento...
                            </strong>
                        </td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($avisos as $aviso) : ?>
                        <tr>
                            <td class="text-primary">
                            <i class="<?php echo $aviso->icone  ?>"></i>
                                
                            </td>
                            <td class="text-primary">
                                <?php echo anchor("avisos/exibir/$aviso->id", esc($aviso->aviso), 'title="Exibir detalhes"') ?>
                            </td>
                            <td class="text-primary d-flex">
                                <a class="btn" href="/avisos/exibir/<?php echo $aviso->id ?>">
                                    <i class="fa fa-archive text-info" title="Editar aviso"></i>
                                </a>  |  
                                <?php echo form_open("avisos/excluir/$aviso->id") ?>                            
                                    <button class="btn" type="submit">
                                        <i class="fa fa-trash text-danger" title="Deletar aviso"></i>
                                    </button>
                                <?php echo form_close(); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>

        </table>

        <div class="card p-5">
            <div class="card-title text-center">
                <h3>Lista de ícones</h3>
            </div>
            <div class="card-body">
                <table class="table bg-dark" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-primary text-warning">Ícone</th>
                            <th class="text-primary text-warning">Código</th>
                            <th class="text-primary text-warning">HTML</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fa-solid fa-bullhorn fa-2x text-white"></i></td>
                            <td><code>fa-solid fa-bullhorn</code></td>
                            <td><code>&lt;i class="fa-solid fa-bullhorn"&gt;&lt;/i&gt;</code></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-flag fa-2x text-white"></i></td>
                            <td><code>fa-solid fa-flag</code></td>
                            <td><code>&lt;i class="fa-solid fa-flag"&gt;&lt;/i&gt;</code></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-triangle-exclamation fa-2x text-white"></i></td>
                            <td><code>fa-solid fa-triangle-exclamation</code></td>
                            <td><code>&lt;i class="fa-solid fa-triangle-exclamation"&gt;&lt;/i&gt;</code></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-download fa-2x text-white"></i></td>
                            <td><code>fa-solid fa-download</code></td>
                            <td><code>&lt;i class="fa-solid fa-download"&gt;&lt;/i&gt;</code></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-id-card fa-2x text-white"></i></td>
                            <td><code>fa-solid fa-id-card</code></td>
                            <td><code>&lt;i class="fa-solid fa-id-card"&gt;&lt;/i&gt;</code></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-newspaper fa-2x text-white"></i></i></td>
                            <td><code>fa-solid fa-newspaper</code></td>
                            <td><code>&lt;i class="fa-solid fa-newspaper"&gt;&lt;/i&gt;</code></td>
                        </tr>
                        <tr>
                            <td><i class="fa-regular fa-folder-open fa-2x text-white"></i></i></td>
                            <td><code>fa-regular fa-folder-open</code></td>
                            <td><code>&lt;i class="fa-regular fa-folder-open"&gt;&lt;/i&gt;</code></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-up-right-from-square fa-2x text-white"></i></i></td>
                            <td><code>fa-solid fa-up-right-from-square</code></td>
                            <td><code>&lt;i class="fa-solid fa-up-right-from-square"&gt;&lt;/i&gt;</code></td>
                        </tr>
                        <tr>
                            <td><i class="fa-brands fa-youtube fa-2x text-white"></i></i></td>
                            <td><code>fa-brands fa-youtube</code></td>
                            <td><code>&lt;i class="fa-brands fa-youtube"&gt;&lt;/i&gt;</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>

<?php $this->endSection(); ?>