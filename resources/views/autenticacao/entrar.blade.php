<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Entrar</title>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://giu.unimed.coop.br/img/thumbnail_2-01.d1fca7ec.jpg" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="/entrar" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" placeholder="Usuário" required value="{{ old('usuario') }}" />
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" id="senha" name="senha" class="form-control form-control-lg" placeholder="Senha" required value="{{ old('senha') }}">
                        </div>

                        <div class="text-center text-lg-center mt-1 pt-2">
                            <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">


                            <br> <br>
                            <div class="d-flex justify-content-center align-items-cente text-center">
                                <p>
                                    <a href="/esqueciSenha" class="text-decoration-none text-dark">Esqueci minha
                                        senha </a>
                                    <a href="/solicitarCadastro" class="text-decoration-none text-dark">| Solicitar
                                        cadastro</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <style>
        .btn-primary {
            background-color: #00995d;
            border-color: #00995d;
        }

        .btn-primary:hover {
            background-color: #00995d;
            border-color: white;
        }
    </style>
</body>

</html>