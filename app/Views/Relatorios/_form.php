<div class="">
    <div class="form-group row">
        <div class="col-sm-6">

            <?php if (usuario_logado()->is_admin === true) : ?>

                <input class="form-control" type="text" name="nome" placeholder="Digite o nome da UETP">


            <?php else : ?>

                <input class="form-control" type="text" name="nome" value="<?php echo usuario_logado()->nome; ?>" readonly>

            <?php endif; ?>
        </div>

        <div class="col-sm-6">

            <?php if (usuario_logado()->is_admin === true) : ?>

                <input class="form-control" type="text" name="local" placeholder="Digite o local da UETP">

            <?php else : ?>
                <input class="form-control" type="text" name="nome" value="<?php echo usuario_logado()->local; ?>" readonly>
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