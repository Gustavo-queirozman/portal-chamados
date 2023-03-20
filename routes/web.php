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
    return view('login');
});



Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('contato');


Route::get('/entrar', [App\Http\Controllers\EntrarController::class, 'index'])->name('login');
Route::post('/entrar', [App\Http\Controllers\EntrarController::class, 'login'])->name('login');

Route::get('/cadastro', [App\Http\Controllers\CadastroController::class, 'index'])->name('register');
Route::post('/cadastro', [App\Http\Controllers\CadastroController::class, 'solicitarCadastro'])->name('register');

Route::get('/mudar-senha', [App\Http\Controllers\MudarSenhaController::class, 'index']);
Route::post('/mudar-senha', [App\Http\Controllers\MudarSenhaController::class, 'mudarSenha']);

Route::get('/esqueci-senha', [App\Http\Controllers\EsqueciSenhaController::class, 'index']);
Route::post('/esqueci-senha', [App\Http\Controllers\EsqueciSenhaController::class, 'enviarNovaSenhaNoEmail']);

//Route::get('/esqueci-senha', [App\Http\Controllers\PasswordController::class, 'esqueciSenha'])->name('esqueciSenha');
//Route::post('/esqueci-senha', [App\Http\Controllers\PasswordController::class, 'esqueciSenha'])->name('esqueciSenha');

Route::get('/chamados', [App\Http\Controllers\ChamadosController::class, 'index'])->name('chamados');
