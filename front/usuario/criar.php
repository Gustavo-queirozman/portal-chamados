<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div style="display:flex; align-items:center; justify-content:center">
    <form style="width:300px">
        <div class="form-group">
            <label for="nome">Nome*</label>
            <input id="nome" name="nome" type="text" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email*</label>
            <input id="email" name="email" type="email" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="usuario">Usuário*</label>
            <input id="usuario" name="usuario" type="text" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="senha">Senha*</label>
            <input id="senha" name="senha" type="text" required="required" class="form-control" value="Unimed@226" readonly> 
        </div>
        <div class="form-group">
            <label for="setor">Setor*</label>
            <div>
                <select id="setor" name="setor" required="required" class="custom-select">
                    <option value="Atendimento">Atendimento</option>
                    <option value="Atualização">Atualização</option>
                    <option value="Cadastro">Cadastro</option>
                    <option value="Diretoria">Diretoria</option>
                    <option value="Faturamento">Faturamento</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Gerencia">Gerencia</option>
                    <option value="SAC">SAC</option>
                    <option value="TI">TI</option>
                    <option value="Vendas">Vendas</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="ramal">Ramal*</label>
            <input id="ramal" name="ramal" type="text" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label for="codAnydesk">Código Anydesk</label>
            <input id="codAnydesk" name="codAnydesk" type="text" class="form-control">
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Cadastrar usuário</button>
        </div>
    </form>
</div>