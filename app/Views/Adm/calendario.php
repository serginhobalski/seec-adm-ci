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
<!-- Header content here -->
<h1><?php echo $titulo; ?></h1>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>

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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var initialLocaleCode = 'pt-br';
        var localeSelectorEl = document.getElementById('locale-selector');
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            locale: initialLocaleCode,
            buttonIcons: false, // show the prev/next text
            weekNumbers: true,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            dayMaxEvents: true, // allow "more" link when too many events
            events: 'https://fullcalendar.io/api/demo-feeds/events.json?overload-day'
        });

        calendar.render();

        // build the locale selector's options
        calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
            var optionEl = document.createElement('option');
            optionEl.value = localeCode;
            optionEl.selected = localeCode == initialLocaleCode;
            optionEl.innerText = localeCode;
            localeSelectorEl.appendChild(optionEl);
        });

        // when the selected option changes, dynamically change the calendar option
        localeSelectorEl.addEventListener('change', function() {
            if (this.value) {
                calendar.setOption('locale', this.value);
            }
        });

    });
</script>
<?php $this->endSection(); ?>