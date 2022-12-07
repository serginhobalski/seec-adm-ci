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
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="email-wrapper">

                <?php echo $this->include('Mensagens/_barra_menu.php'); ?>

                <div class="mail-list-container">
                    <form class="mail-compose">
                        <div class="container row">
                            <div class="form-group col-3">
                                <input class="form-control" type="text" name="remetente_id" value="<?php echo usuario_logado()->id ?>" readonly>
                            </div>
                            <div class="form-group col-9">
                                <?php echo usuario_logado()->nome ?>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <!-- <input class="form-control" type="text" placeholder="Para"> -->
                            <select name="destinatario_id" id="destinatario_id" <?php echo (usuario_logado()->is_admin === true ? 'multiple' : '') ?>>
                                <?php foreach ($destinatarios as $destinatario) : ?>
                                    <option value="<?php echo $destinatario->id ?>"><?php echo $destinatario->nome ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <input class="form-control" type="text" name="assunto" placeholder="Assunto">
                        </div>
                        <div class="form-group col-12">
                            <div class="note-editor note-frame card">
                                <textarea class="note-codable" rows="5" role="textbox" aria-multiline="true" name="mensagem" placeholder="Digite sua mensagem..."></textarea>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <input id="btn-enviar" type="submit" value="Enviar" class="btn btn-warning mr-2">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
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
                url: '<?php echo site_url('mensagens/cadastrar'); ?>',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $("#response").html('');
                    $("#btn-enviar").val('Processando requisição...');
                },
                success: function(response) {
                    $("#btn-enviar").val('Enviar');
                    $("#btn-enviar").removeAttr("disabled");

                    $('[name=csrf_test_name]').val(response.token);

                    if (!response.erro) {


                        if (response.info) {
                            $("#response").html('<div class="alert alert-info">' + response.info + '</div>');

                        } else {
                            // Tudo certo! Pode redirecionar!
                            window.location.href = "<?php echo site_url("mensagens"); ?>";
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
                    $("#btn-enviar").val('Enviar');
                    $("#btn-enviar").removeAttr("disabled");
                },

            });

        });

        $("#form").submit(function() {

            $(this).find(":submit").attr('disabled', 'disabled');

        });

    });
</script>

<?php $this->endSection(); ?>