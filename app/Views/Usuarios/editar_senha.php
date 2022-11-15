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

    <div class="col-lg-12">

        <div class="block">

            <div class="block-body">

                <!-- Exibirá os retornos do backend -->
                <div id="response">


                </div>


                <?php echo form_open('/', ['id' => 'form']) ?>


                <div class="form-group">
                    <label class="form-control-label">Informe a senha atual</label>
                    <input type="password" name="current_password" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-control-label">Informe a nova senha</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-control-label">Confirme a nova senha</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>


                <div class="form-group mt-5 mb-2">

                    <input id="btn-salvar" type="submit" value="Salvar" class="btn btn-danger btn-sm mr-2">

                </div>


                <?php echo form_close(); ?>


            </div>



        </div> <!-- ./ block -->

    </div>

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
                url: '<?php echo site_url('usuarios/atualizarsenha'); ?>',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {

                    $("#response").html('');
                    $("#btn-salvar").val('Por favor aguarde...');

                },
                success: function(response) {

                    $("#btn-salvar").val('Salvar');
                    $("#btn-salvar").removeAttr("disabled");

                    $('[name=csrf_ordem]').val(response.token);


                    if (!response.erro) {

                        // Limpando o formulário
                        $("#form")[0].reset();


                        if (response.info) {

                            $("#response").html('<div class="alert alert-info">' + response.info + '</div>');

                        } else {

                            $("#response").html('<div class="alert alert-success">' + response.sucesso + '</div>');
                        }
                    }

                    if (response.erro) {

                        // Exitem erros de validação


                        $("#response").html('<div class="alert alert-danger">' + response.erro + '</div>');


                        if (response.erros_model) {


                            $.each(response.erros_model, function(key, value) {

                                $("#response").append(
                                    '<ul class="list-unstyled"><li class="text-danger">' +
                                    value + '</li></ul>');

                            });

                        }

                    }

                },
                error: function() {

                    alert(
                        'Não foi possível procesar a solicitação. Por favor entre em contato com o suporte técnico.');
                    $("#btn-salvar").val('Salvar');
                    $("#btn-salvar").removeAttr("disabled");

                }

            });


        });


        $("#form").submit(function() {

            $(this).find(":submit").attr('disabled', 'disabled');

        });


    });
</script>
<?php $this->endSection(); ?>