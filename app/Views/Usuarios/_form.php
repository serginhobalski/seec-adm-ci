<div class="">
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Nome</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" name="nome" value="<?php echo $usuario->nome; ?>" placeholder="Insira o nome de usuário">
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
            <input class="form-control" type="text" name="login" value="<?php echo $usuario->login; ?>" placeholder="Insira o login do usuário">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Senha</label>
        <div class="col-sm-8">
            <input class="form-control" type="password" name="password" placeholder="Insira a senha do usuário">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Confirmação de Senha</label>
        <div class="col-sm-8">
            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirme a senha do usuário">
        </div>
    </div>

    <div class="seperator"></div>

    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Usuário Ativo</label>
        <div class="col-sm-8">
            <select name="ativo" id="ativo">
                <?php if ($usuario->ativo == true) : ?>
                    <option value="1" selected>Ativo</option>
                    <option value="0">Inativo</option>
                <?php else : ?>
                    <option value="1">Ativo</option>
                    <option value="0" selected>Inativo</option>
                <?php endif; ?>
            </select>
        </div>
    </div>

</div>