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


Route::get('/login/{erro?}', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'autenticar'])->name('login');

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'solicitar'])->name('register');

Route::get('/modify', [App\Http\Controllers\PasswordController::class, 'index']);
Route::post('/modify', [App\Http\Controllers\PasswordController::class, 'teste']);

//Route::get('/esqueci-senha', [App\Http\Controllers\PasswordController::class, 'esqueciSenha'])->name('esqueciSenha');
//Route::post('/esqueci-senha', [App\Http\Controllers\PasswordController::class, 'esqueciSenha'])->name('esqueciSenha');

Route::get('/chamados', [App\Http\Controllers\ChamadosController::class, 'index'])->name('chamados');
