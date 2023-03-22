<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('autenticacao.entrar');
});


Route::get('/entrar', function () {
    return view('autenticacao.entrar');
});
Route::post('/entrar', [App\Http\Controllers\autenticacao\EntrarController::class, 'entrar'])->name('entrar');


Route::get('/cadastro', function () {
    return view('autenticacao.cadastro');
});
Route::post('/cadastro', [App\Http\Controllers\autenticacao\CadastroController::class, 'solicitarCadastro'])->name('autenticacao.cadastro');
#Route::post('/cadastro/criar', [App\Http\Controllers\autenticacao\CadastroController::class, 'criar'])->name('autenticacao.cadastro');
#Route::get('/mudarSenha', [App\Http\Controllers\MudarSenhaController::class, 'index'])->name('autenticacao.mudarSenha');


Route::get('/mudarSenha', function () {
    return view('autenticacao.mudarSenha');
});
Route::post('/mudarSenha', [App\Http\Controllers\autenticacao\MudarSenhaController::class, 'mudarSenha'])->name('autenticacao.mudarSenha');



Route::get('/esqueciSenha', function () {
    return view('autenticacao.esqueciSenha');
});
Route::post('/esqueciSenha', [App\Http\Controllers\autenticacao\EsqueciSenhaController::class, 'enviarNovaSenhaNoEmail'])->name('autenticacao.esqueciSenha');

