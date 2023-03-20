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
    return view('entrar');
});


Route::get('/entrar', [App\Http\Controllers\EntrarController::class, 'index'])->name('entrar');
Route::post('/entrar', [App\Http\Controllers\EntrarController::class, 'entrar'])->name('entrar');

Route::get('/cadastro', [App\Http\Controllers\CadastroController::class, 'index'])->name('cadastro');
Route::post('/cadastro', [App\Http\Controllers\CadastroController::class, 'solicitarCadastro'])->name('cadastro');

Route::get('/mudarSenha', [App\Http\Controllers\MudarSenhaController::class, 'index'])->name('mudarSenha');
Route::post('/mudarSenha', [App\Http\Controllers\MudarSenhaController::class, 'mudarSenha'])->name('mudarSenha');

Route::get('/esqueciSenha', [App\Http\Controllers\EsqueciSenhaController::class, 'index'])->name('esqueciSenha');
Route::post('/esqueciSenha', [App\Http\Controllers\EsqueciSenhaController::class, 'enviarNovaSenhaNoEmail'])->name('esqueciSenha');




Route::get('/chamados', [App\Http\Controllers\ChamadosController::class, 'index'])->name('chamados');
