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
        <h2 class="title-head">Faça login com <span>sua conta</span></h2>
        <p>Não possui acesso? <a href="#">fale conosco</a></p>
    </div>
    <?php echo form_open('/', ['id' => 'form', 'class' => 'contact-bx']); ?>

    <div id="response"></div>


    <div class="row placeani">
        <div class="col-lg-12">
            <div class="form-group">
                <div class="input-group">
                    <label>Seu login</label>
                    <input name="login" type="text" required="" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <div class="input-group">
                    <label>Sua senha</label>
                    <input name="password" type="password" class="form-control" required="">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group form-forget">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" checked>
                    <label class="custom-control-label" for="customControlAutosizing">Lembar</label>
                </div>
                <a href="<?php echo site_url("esqueci"); ?>" class="ml-auto">Esqueceu a senha?</a>
            </div>
        </div>
        <div class="col-lg-12 m-b30">
            <input id="btn-login" name="btn-login" type="submit" value="Entrar" class="btn button-md">
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
                url: '<?php echo site_url('login/criar'); ?>',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $("#response").html('');
                    $("#btn-login").val('Processando requisição...');
                },
                success: function(response) {
                    $("#btn-login").val('Entrar');
                    $("#btn-login").removeAttr("disabled");

                    $('[name=csrf_test_name]').val(response.token);

                    if (!response.erro) {

                        // Tudo certo! Pode redirecionar!
                        window.location.href = "<?php echo site_url(); ?>" + response.redirect;

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
                    $("#btn-login").val('Entrar');
                    $("#btn-login").removeAttr("disabled");
                },

            });

        });

        $("#form").submit(function() {

            $(this).find(":submit").attr('disabled', 'disabled');

        });

    });
</script>

<?php $this->endSection(); ?>