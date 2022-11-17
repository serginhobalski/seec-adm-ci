<?php echo $this->extend('Layout/Autenticacao/base_login'); ?>

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

<div class="account-container">
    <div class="heading-bx left">
        <h2 class="title-head">Atualize a <span>sua senha</span></h2>
        <p>Crie uma nova senha de acesso.</p>
    </div>
    <?php echo form_open('/', ['id' => 'form', 'class' => 'contact-bx'], ['token' => $token]); ?>

    <div id="response"></div>


    <div class="row placeani">

        <div class="col-lg-12">
            <div class="form-group">
                <div class="input-group">
                    <label>Digite a nova senha</label>
                    <input name="password" type="password" class="form-control" required="">
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <div class="input-group">
                    <label>Confirme a nova senha</label>
                    <input name="password_confirmation" type="password" class="form-control" required="">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group form-forget">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" checked>
                    <label class="custom-control-label" for="customControlAutosizing">Lembar</label>
                </div>

            </div>
        </div>
        <div class="col-lg-12 m-b30">
            <input id="btn-reset" name="btn-reset" type="submit" value="Salvar" class="btn button-md">
        </div>
    </div>

    <?php echo form_close(); ?>
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
                url: '<?php echo site_url('password/processareset'); ?>',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $("#response").html('');
                    $("#btn-reset").val('Processando requisição...');
                },
                success: function(response) {
                    $("#btn-reset").val('Salvar');
                    $("#btn-reset").removeAttr("disabled");

                    $('[name=csrf_test_name]').val(response.token);

                    if (!response.erro) {

                        // Tudo certo! Pode redirecionar!
                        window.location.href = "<?php echo site_url('login'); ?>";

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
                    $("#btn-reset").val('Salvar');
                    $("#btn-reset").removeAttr("disabled");
                },

            });

        });

        $("#form").submit(function() {

            $(this).find(":submit").attr('disabled', 'disabled');

        });

    });
</script>

<?php $this->endSection(); ?>