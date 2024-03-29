<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Perfil</title>
</head>

<body style="background-color: #F5F5F5">
    <br><br>

    <div class="d-flex align-center justify-content-center ">
        <div class="card w-75" style="border-radius:10px">
            <div class="card-header"><b>Atualizar perfil</b></div>
            <div class="card-body">
                <form action="/solicitante/perfil/editar" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome*</label>
                        <input type="text" class="form-control" name="nome" value="{{$usuario['nome']}}" id="nome" required>
                    </div>

                    <div class="form-group">
                        <div class="form-row align-items-center">
                            <div class="col-md-4 mb-3">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" name="email" value="{{$usuario['email']}}" id="email" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="usuario">Usuário*</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" value="{{$usuario['usuario']}}" required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="senha">Senha*</label>
                                <input type="password" class="form-control" name="senha" id="senha" value="{{$usuario['senha']}}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row align-items-center">
                            <div class="col-md-4 mb-3">
                                <label for="setor">Setor*</label>
                                <select class="custom-select" name="setor" id="setor">
                                    <option value="{{$usuario['setor']}}">{{$usuario['setor']}}</option>
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
                            <div class="col-md-4 mb-3">
                                <label for="ramail">Ramal</label>
                                <input type="text" class="form-control" name="ramal" id="ramal" value="{{$usuario['ramal']}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="codAnydesk">Código do Anydesk</label>
                                <input type="text" class="form-control" name="codAnydesk" value="{{$usuario['codAnydesk']}}" id="codAnydesk">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="button">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>