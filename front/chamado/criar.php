<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="display:flex; align-items:center; justify-content:center">
  <form style="width:300px">
    <div class="form-group">
      <label for="tipo">Tipo*</label>
      <div>
        <select id="tipo" name="tipo" required="required" class="custom-select">
          <option value="Hardware">Hardware</option>
          <option value="Software">Software</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="categoria">Categoria*</label>
      <div>
        <select id="categoria" name="categoria" class="custom-select" required="required">
          <option value="rabbit">Rabbit</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="titulo">Título*</label>
      <input id="titulo" name="titulo" type="text" class="form-control" required="required">
    </div>
    <div class="form-group">
      <label for="prioridade">Prioridade*</label>
      <div>
        <select id="prioridade" name="prioridade" class="custom-select" required="required">
          <option value="Baixo">Baixo</option>  
          <option value="Normal">Normal</option>
          <option value="Alto">Alto</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="descricao">Descrição*</label>
      <textarea id="descricao" name="descricao" type="text" class="form-control" required="required" rows="5"></textarea>
    </div>
    <div class="form-group">
      <label for="atendente">Atendente</label>
      <input id="atendente" name="atendente" type="text" class="form-control" readonly>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <input id="status" name="status" type="text" class="form-control" readonly> 
    </div>
    <div class="form-group">
      <button name="submit" type="submit" class="btn btn-primary">Criar chamado</button>
    </div>
  </form>
</div>