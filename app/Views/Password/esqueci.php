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
        <h2 class="title-head">Esqueceu <span>sua senha?</span></h2>
        <p>Coloque abaixo o e-mail associado à sua conta, para solicitar uma nova senha. <br>
            Em caso de dúvida, <a href="https://wa.me/5591991882198">fale conosco.</a></p>
    </div>
    <?php echo form_open('/', ['id' => 'form', 'class' => 'contact-bx']); ?>

    <div id="response"></div>

    <div class="row placeani">
        <div class="col-lg-12">
            <div class="form-group">
                <div class="input-group">
                    <label>Seu e-mail</label>
                    <input name="email" type="mail" required="" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group form-forget">
                Lembrou a senha?<a href="<?php echo site_url("login"); ?>" class="ml-auto"> Faça seu login aqui.</a>
            </div>
        </div>
        <div class="col-lg-12 m-b30">
            <input id="btn-esqueci" name="btn-esqueci" type="submit" value="Enviar" class="btn button-md">
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
                url: '<?php echo site_url('password/processaesqueci'); ?>',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $("#response").html('');
                    $("#btn-esqueci").val('Processando requisição...');
                },
                success: function(response) {
                    $("#btn-esqueci").val('Enviar');
                    $("#btn-esqueci").removeAttr("disabled");

                    $('[name=csrf_test_name]').val(response.token);

                    if (!response.erro) {

                        // Tudo certo! Pode redirecionar!
                        window.location.href = "<?php echo site_url("password/resetenviado"); ?>";

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
                    $("#btn-esqueci").val('Enviar');
                    $("#btn-esqueci").removeAttr("disabled");
                },

            });

        });

        $("#form").submit(function() {

            $(this).find(":submit").attr('disabled', 'disabled');

        });

    });
</script>

<?php $this->endSection(); ?>