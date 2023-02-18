<div class="">
    <div class="form-group row">
        <div class="col-sm-6">
            <input class="form-control" type="text" name="titulo" placeholder="Digite o título do evento">
        </div>

        <div class="col-sm-6">
            <input class="form-control" type="text" name="local" placeholder="Digite o local do evento">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-6">
            <label for="tipo" class="form-label">Tipo de evento</label>
            <select name="tipo" id="tipo">
                <option value="Online">Online</option>
                <option value="Presencial">Presencial</option>
                <option value="Híbrido">Híbrido</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="status" class="form-label">Status do Evento</label>
            <select name="status" id="status">
                <option value="A realizar" selected>A realizar</option>
                <option value="Concluído">Concluído</option>
                <option value="Em curso">Em curso</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-3">
            <label for="data_inicio">Data de Início</label>
            <input class="form-control" type="date" name="data_inicio" id="data_inicio">
        </div>
        <div class="col-sm-3">
            <label for="hora_inicio">Hora de Início</label>
            <input class="form-control" type="time" name="hora_inicio" id="hora_inicio">
        </div>
        <div class="col-sm-3">
            <label for="data_termino">Data de Término</label>
            <input class="form-control" type="date" name="data_termino" id="data_termino">
        </div>
        <div class="col-sm-3">
            <label for="hora_termino">Hora de Término</label>
            <input class="form-control" type="time" name="hora_termino" id="hora_termino">
        </div>
    </div>

    <hr class="seperator">

    <div class="form-group row">
        <div class="col-sm-6">
            <label for="descricao" class="form-label">Descrição do evento</label>
            <input id="descricao" class="form-control" type="text" name="descricao" placeholder="Descrição breve do evento">
        </div>
        <div class="col-sm-6">
            <label for="imagem" class="form-label">Imagem do evento</label>
            <input id="imagem" class="form-control" type="file" name="imagem" placeholder="Selecionar a imagem do evento">
            <span class="help text-info">*Formatos aceitos (".jpg", ".jpeg", ".png").</span>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12">
            <label for="detalhes" class="form-label">Detalhes do evento</label>
            <textarea id="detalhes" class="form-control" name="detalhes" cols="30" rows="10">Detalhes do evento...</textarea>
        </div>
    </div>


</div>