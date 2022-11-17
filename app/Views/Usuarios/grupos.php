<?php echo $this->extend('Layout/adm'); ?>

<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>


<!-- Custom styles -->
<?php echo $this->section('estilos'); ?>
<link rel="stylesheet" href="<?php echo site_url('src/assets/selectize/selectize.bootstrap4.css') ?>">
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
            <div class="wc-title">
                <h4>Grupo(s) de acesso de <?php echo $usuario->nome; ?></h4>
            </div>
            <div class="widget-inner">

                <div class="">
                    <div class="seperator"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nome do grupo</label>
                        <div class="col-sm-7">
                            <h4><?php echo $usuario->nome; ?></h4>
                        </div>
                    </div>

                    <?php if (empty($gruposDisponiveis)) : ?>

                        <?php if ($usuario->full_control == false) : ?>
                            <h4> Este usuário já faz parte de todos os grupos disponíveis.</h4>
                        <?php else : ?>
                            <h4> Este usuário é administrador e possui acesso a todos os grupos.</h4>
                        <?php endif; ?>

                    <?php else : ?>

                        <div id="response">

                        </div>

                        <?php echo form_open('/', ['id' => 'form'], ['id' => "$usuario->id"]) ?>

                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Escolha um grupo de acesso</label>

                            <div class="col-sm-12">
                                <select name="grupo_id[]" class="selectize">
                                    <?php foreach ($gruposDisponiveis as $grupo) : ?>
                                        <option value="<?php echo $grupo->id ?>"><?php echo $grupo->nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group mt-5 mb-4 d-flex">

                            <input id="btn-salvar" type="submit" value="Salvar" class="btn btn-danger mr-2">
                            <a class="btn" href="<?php echo site_url("usuarios/exibir/$usuario->id"); ?>"><i class="ti-arrow-left"></i> Voltar</a>

                        </div>

                        <?php echo form_close(); ?>

                    <?php endif; ?>

                    <div class="form-group row">
                        <label class="col-sm-12 col-form-label">Permissões do usuário</label>
                        <div class="col-sm-12">
                            <?php if (empty($usuario->grupos) || $usuario->grupos == null) : ?>
                                <h3>Este usuário não faz parte de nenhum grupo de acesso.</h3>
                            <?php else : ?>
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Grupo</th>
                                                <th>Descrição</th>
                                                <th>Excluir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($usuario->grupos as $info) : ?>
                                                <tr>
                                                    <td><?php echo esc($info->nome); ?></td>
                                                    <td><?php echo ellipsize($info->descricao, 152, .5); ?></td>
                                                    <td>
                                                        <?php
                                                        $atributos = [
                                                            'onSubmit' => "return confirm('Tem certeza de que deseja excluir este grupo de acesso?');",
                                                        ];
                                                        ?>
                                                        <?php echo form_open("usuarios/removegrupo/$info->principal_id", $atributos) ?>
                                                        <button class="bg-danger text-white" type="submit"><i class="fa fa-trash"></i> Excluir</button>
                                                        <?php echo form_close(); ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                    <?php echo $usuario->pager->links(); ?>


                                </div>
                            <?php endif; ?>
                            <span class="help">*Grupo(s) de acesso do usuário.</span>
                        </div>
                    </div>


                    <div class="seperator"></div>


                </div>
                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-7 d-flex">
                                <a href="/usuarios" class="btn btn-dark ml-3"><i class="ti-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
</div>

<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<script src='<?php echo site_url('src/assets/selectize/selectize.min.js') ?>'></script>
<script>
    $(document).ready(function() {

        $(".selectize").selectize({
            create: true,
            sortField: "text",
        });
    });
</script>
<script>
    $(document).ready(function() {

        $("#form").on('submit', function(e) {

            e.preventDefault();

            $.ajax({

                type: 'POST',
                url: '<?php echo site_url('usuarios/salvargrupos'); ?>',
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

                        // Tudo certo! Pode redirecionar!
                        window.location.href = "<?php echo site_url("usuarios/grupos/$usuario->id"); ?>";

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