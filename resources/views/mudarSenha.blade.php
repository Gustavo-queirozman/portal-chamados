<h1>Modificar senha</h1>
<form action="{{ route('mudar') }}" method="post">
    @csrf
    <input type="text" name="novaSenha" placeholder="Nova senha">
    <br>
    <input type="text" name="confirmarSenha" placeholder="Confirmar nova senha">
    <br>
    <input type="submit" value="Modificar">
</form>

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