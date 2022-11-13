<div class="">
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Nome</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" name="nome" value="<?php echo esc($grupo->nome); ?>" placeholder="Insira o nome do grupo de acesso">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Descrição</label>
        <div class="col-sm-8">
            <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Insira a descrição do grupo de acesso"><?php echo esc($grupo->descricao); ?></textarea>
        </div>
    </div>

    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Status
            <a tabindex="0" class="text-primary" role="button" data-toggle="popover" data-trigger="focus" title="Importante!" data-content="Se este grupo estiver definido como <b>Exibir</b>, ficará disponível para ser atribuído aos usuários do sistema, mas se estiver definido como <b>Ocultar</b>, não poderá ser atribuído aos demais usuários."><i class="fa fa-info-circle"></i></a>
        </label>
        <div class="col-sm-8">
            <select name="exibir" id="exibir">
                <?php if ($grupo->exibir == true) : ?>
                    <option value="1" selected>Exibir</option>
                    <option value="0">Ocultar</option>
                <?php else : ?>
                    <option value="1">Exibir</option>
                    <option value="0" selected>Ocultar</option>
                <?php endif; ?>
            </select>
        </div>
    </div>

</div>