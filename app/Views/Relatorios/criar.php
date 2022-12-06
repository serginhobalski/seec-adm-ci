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

        <?php echo form_open_multipart('/', ['id' => 'form'], ['id' => "$relatorio->id"]) ?>

        <div class="">
            <div class="form-group row">
                <div class="col-sm-6">

                    <?php if (usuario_logado()->is_admin === true) : ?>

                        <select name="nome" id="nome">
                            <?php foreach ($uetps as $uetp) : ?>
                                <option value="<?php echo $uetp->nome ?>"><?php echo $uetp->nome ?></option>
                            <?php endforeach; ?>
                        </select>

                    <?php else : ?>

                        <input class="form-control" type="text" name="nome" value="<?php echo usuario_logado()->nome; ?>" readonly>

                    <?php endif; ?>
                </div>

                <div class="col-sm-6">

                    <?php if (usuario_logado()->is_admin === true) : ?>

                        <!-- <input class="form-control" type="text" name="local" placeholder="Digite o local da UETP"> -->
                        <select name="local" id="local">
                            <?php foreach ($uetps as $uetp) : ?>
                                <option value="<?php echo $uetp->local ?>"><?php echo $uetp->local ?></option>
                            <?php endforeach; ?>
                        </select>

                    <?php else : ?>
                        <input class="form-control" type="text" name="local" value="<?php echo usuario_logado()->local; ?>" readonly>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="mes" class="form-label">Mês</label>
                    <select name="mes" id="mes">
                        <option value="JANEIRO">JANEIRO</option>
                        <option value="FEVEREIRO">FEVEREIRO</option>
                        <option value="MARÇO">MARÇO</option>
                        <option value="ABRIL">ABRIL</option>
                        <option value="MAIO">MAIO</option>
                        <option value="JUNHO">JUNHO</option>
                        <option value="JULHO">JULHO</option>
                        <option value="AGOSTO">AGOSTO</option>
                        <option value="SETEMBRO">SETEMBRO</option>
                        <option value="OUTUBRO">OUTUBRO</option>
                        <option value="NOVEMBRO" selected>NOVEMBRO</option>
                        <option value="DEZEMBRO">DEZEMBRO</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="ano" class="form-label">Ano</label>
                    <select name="ano" id="ano">
                        <option value="2022" selected>2022</option>
                        <option value="2023">2023</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="ano" class="form-label">Valor</label>
                    <input class="form-control" type="text" name="valor" placeholder="Valor da taxa">
                </div>
            </div>

            <hr class="seperator">

            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="comprovante" class="form-label">Comprovante</label>
                    <input id="comprovante" class="form-control" type="file" name="comprovante" placeholder="Anexar o comprovante de pagamento da taxa">
                    <span class="help text-info">*Anexar comprovante de pagamento da taxa (".pdf", ".jpg", ".jpeg", ".png").</span>
                </div>
                <div class="col-sm-6">
                    <label for="relatorio" class="form-label">Relatório</label>
                    <input id="relatorio" class="form-control" type="file" name="relatorio" placeholder="Anexar o relatório detalhado">
                    <span class="help text-info">*Anexar relatório (".pdf", ".jpg", ".jpeg", ".png").</span>
                </div>
            </div>

        </div>

        <div class="form-group mt-5 mb-4 d-flex">

            <input id="btn-enviar" type="submit" value="Enviar" class="btn btn-danger mr-2">
            <?php if (usuario_logado()->is_admin) : ?>
                <a class="btn" href="<?php echo site_url("relatorios"); ?>"><i class="ti-arrow-left"></i> Voltar</a>
            <?php else : ?>
                <a class="btn" href="<?php echo site_url("relatorios/meusrelatorios"); ?>"><i class="ti-arrow-left"></i> Voltar</a>
            <?php endif; ?>


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
                url: '<?php echo site_url('relatorios/cadastrar'); ?>',
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
                            window.location.href = "<?php echo site_url("relatorios/meusrelatorios/"); ?>";
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