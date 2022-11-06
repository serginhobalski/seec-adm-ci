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
<!-- Header content here -->
<h1><?php echo $titulo; ?></h1>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>

<div class="table-responsive radius-md">
    <table id="ajaxTableUsuarios" class="table" style="width: 100%;">
        <thead>
            <tr>
                <th class="text-primary">#</th>
                <th class="text-primary">Usuário</th>
                <th class="text-primary">Local</th>
                <th class="text-primary">Login</th>
                <th class="text-primary">Tipo</th>
                <!-- <th class="text-primary">Ações</th> -->
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
        $('#ajaxTableUsuarios').DataTable({
            ajax: "<?php echo site_url('usuarios/recuperausuarios'); ?>",
            columns: [{
                    data: 'imagem'
                },
                {
                    data: 'nome'
                },
                {
                    data: 'local'
                },
                {
                    data: 'login'
                },
                {
                    data: 'admin'
                },
            ],
        });
    });
</script>

<?php $this->endSection(); ?>