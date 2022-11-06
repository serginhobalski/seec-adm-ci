<?php echo $this->extend('Layout/adm'); ?>

<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>


<!-- Custom styles -->
<?php echo $this->section('estilos'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.css" />
<?php $this->endSection(); ?>


<!-- Custom header -->
<?php echo $this->section('header'); ?>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>

<div class="table-responsive radius-md">
    <table id="ajaxTableRelatorios" class="table" style="width: 100%;">
        <thead>
            <tr>
                <th class="text-primary">Id</th>
                <th class="text-primary">Usuário</th>
                <th class="text-primary">Local</th>
                <th class="text-primary">Mês</th>
                <th class="text-primary">Ano</th>
                <th class="text-primary">Valor</th>
            </tr>
        </thead>

    </table>
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#ajaxTableRelatorios').DataTable({
            ajax: "<?php echo site_url('relatorios/recuperarelatorios'); ?>",
            columns: [{
                    data: 'id'
                },
                {
                    data: 'nome'
                },
                {
                    data: 'local'
                },
                {
                    data: 'mes'
                },
                {
                    data: 'ano'
                },
                {
                    data: 'valor'
                },
            ],
        });
    });
</script>

<?php $this->endSection(); ?>