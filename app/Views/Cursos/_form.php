<div class="">
    <div class="form-group row">
        <div class="col-sm-12">
            <label for="nome" class="form-label">Nome</label>
            <input id="nome" class="form-control" type="text" name="nome" value="<?php echo esc($curso->nome); ?>" placeholder="Insira o nome do curso">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6">
            <label for="valor" class="form-label">Valor</label>
            <input id="valor" class="form-control" type="text" name="valor" value="<?php echo $curso->valor; ?>" placeholder="Insira o valor do curso">
        </div>
        <div class="col-sm-6">
            <label for="categoria" class="form-label">Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
                <option value="itq" <?php (esc($curso->categoria) === 'itq' ? 'selected' : ''); ?>>ITQ</option>
                <option value="postulantes" <?php (esc($curso->categoria) === 'postulantes' ? 'selected' : ''); ?>>Postulantes</option>
                <option value="lideranca" <?php (esc($curso->categoria) === 'lideranca' ? 'selected' : ''); ?>>Liderança</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea id="descricao" name="descricao" id="descricao" cols="100%" rows="10" placeholder="Insira a descrição do curso"><?php echo esc($curso->descricao); ?></textarea>
        </div>
    </div>

    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Status
            <a tabindex="0" class="text-primary" role="button" data-toggle="popover" data-trigger="focus" title="Importante!" data-content="Se este curso estiver definido como <b>Ativo</b>, ficará disponível para ser atribuído aos usuários do sistema, mas se estiver definido como <b>Inativo</b>, não poderá ser atribuído aos demais usuários."><i class="fa fa-info-circle"></i></a>
        </label>
        <div class="col-sm-8">
            <select name="ativo" id="ativo">
                <option value="1" selected <?php (esc($curso->ativo) === true ? 'selected' : ''); ?>>Ativo</option>
                <option value="0" <?php (esc($curso->ativo) === false ? 'selected' : ''); ?>>Inativo</option>
            </select>
        </div>
    </div>

</div>