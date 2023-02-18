<?php echo $this->extend('Layout/adm'); ?>

<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>


<!-- Custom styles -->
<?php echo $this->section('estilos'); ?>
<!-- Styles content here -->
<?php $this->endSection(); ?>


<!-- Custom header -->
<?php echo $this->section('header'); ?>
<!-- Header content here -->
<h1><?php echo $titulo; ?></h1>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>

<div class="row">
    <div class="col-12">

        <div id="response">

        </div>

        <?php echo form_open('/', ['id' => 'form'], ['id' => "$evento->id"]) ?>

        <?php echo $this->include('Eventos/_form.php'); ?>

        <div class="form-group mt-5 mb-4 d-flex">

            <input id="btn-salvar" type="submit" value="Salvar" class="btn btn-danger mr-2">
            <a class="btn" href="<?php echo site_url("eventos"); ?>"><i class="ti-arrow-left"></i> Voltar</a>

        </div>

        <?php echo form_close(); ?>

    </div>


</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>

<script>
    $(document).ready(function() {

        $("#form").on('submit', function(e) {

            e.preventDefault();

            $.ajax({

                type: 'POST',
                url: '<?php echo site_url('eventos/cadastrar'); ?>',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $("#response").html('');
                    $("#btn-salvar").val('Processando requisição...');
                },
                success: function(response) {
                    $("#btn-salvar").val('Salvar');
                    $("#btn-salvar").removeAttr("disabled");

                    $('[name=csrf_test_name]').val(response.token);

                    if (!response.erro) {


                        if (response.info) {
                            $("#response").html('<div class="alert alert-info">' + response.info + '</div>');

                        } else {
                            // Tudo certo! Pode redirecionar!
                            window.location.href = "<?php echo site_url("usuarios/exibir/"); ?>" + response.id;
                        }

                    }
                    if (response.erro) {
                        // Existem erros de validação

                        $("#response").html('<div class="alert alert-danger">' + response.erro + '</div>');

                        if (response.erros_model) {

                            $.each(response.erros_model, function(key, value) {

                                $("#response").append('<ul class="list-unstyled"><li class"text-danger">' + value + '</li></ul>')

                            });

                        }

                    }
                },
                error: function() {
                    alert('Não foi possível processar a solicitação');
                    $("#btn-salvar").val('Salvar');
                    $("#btn-salvar").removeAttr("disabled");
                },

            });

        });

        $("#form").submit(function() {

            $(this).find(":submit").attr('disabled', 'disabled');

        });

    });
</script>
<?php $this->endSection(); ?>