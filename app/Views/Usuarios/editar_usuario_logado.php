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

        <div id="response"></div>

        <?php $usuario = usuario_logado(); ?>

        <?php echo form_open('/', ['id' => 'form'], ['id' => "$usuario->id"]) ?>

        <div class="">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nome</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="nome" value="<?php echo $usuario->nome; ?>" placeholder="Insira o nome de usuário" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Local</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="local" value="<?php echo $usuario->local; ?>" placeholder="Insira o nome de usuário">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">E-mail</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="email" value="<?php echo $usuario->email; ?>" placeholder="Insira o e-mail do usuário">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Telefone</label>
                <div class="col-sm-8">
                    <input class="form-control" type="tel" name="telefone" value="<?php echo $usuario->telefone; ?>" placeholder="Insira o telefone do usuário">
                </div>
            </div>

            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Login</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="login" value="<?php echo $usuario->login; ?>" placeholder="Insira o login do usuário" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Senha</label>
                <div class="col-sm-8">
                    <input class="form-control" type="password" name="password" placeholder="Insira a nova senha">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Confirmação de Senha</label>
                <div class="col-sm-8">
                    <input class="form-control" type="password" name="password_confirmation" placeholder="Confirme a nova senha">
                </div>
            </div>

            <div class="seperator"></div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                    <h3><?php echo $usuario->exibeSituacao(); ?></h3>
                    <!-- <input type="text" name="ativo" id="" value="<?php echo $usuario->ativo ?>" readonly disabled> -->
                </div>
            </div>

        </div>

        <div class="form-group mt-5 mb-4 d-flex">

            <input id="btn-salvar" type="submit" value="Salvar" class="btn btn-danger mr-2">
            <script>
                function goBack() {
                    window.history.back()
                }
            </script>

            <body>
                <button class="btn" onclick="goBack()">
                    <i class="fa fa-arrow-circle-left"></i> Voltar
                </button>
            </body>

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
                url: '<?php echo site_url('usuarios/atualizar'); ?>',
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
                            window.history.back();
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