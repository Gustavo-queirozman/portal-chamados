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
Route::post('/entrar', [App\Http\Controllers\autenticacao\EntrarController::class, 'get']);



Route::get('/cadastro', function () {
    return view('autenticacao.index');
});
Route::post('/cadastro', [App\Http\Controllers\autenticacao\CadastroController::class, 'solicitarCadastro'])->name('solicitarCadastro');

Route::get('/solicitarCadastro', function () {
    return view('autenticacao.solicitarCadastro');
});
Route::post('/solicitarCadastro', [App\Http\Controllers\autenticacao\solicitarCadastro::class, 'solicitarCadastro'])->name('solicitarCadastro');

Route::get('/cadastro', function () {
    return view('autenticacao.cadastro');
});
Route::post('/cadastro', [App\Http\Controllers\autenticacao\CadastroController::class, 'cadastro'])->name('cadastro');

Route::get('/mudarSenha', function () {
    return view('autenticacao.mudarSenha');
});
Route::post('/mudarSenha', [App\Http\Controllers\autenticacao\MudarSenhaController::class, 'mudarSenha'])->name('mudarSenha');

Route::get('/esqueciSenha', function () {
    return view('autenticacao.esqueciSenha');
});
Route::post('/esqueciSenha', [App\Http\Controllers\autenticacao\EsqueciSenhaController::class, 'enviarNovaSenhaNoEmail'])->name('esqueciSenha');



Route::prefix('solicitante')->group(function () {
    Route::prefix('chamado')->group(function () {
        Route::get('/ver', function () {
            return view('solicitante.chamado.ver');
        });
        Route::get('/criar', function () {
            return view('solicitante.chamado.criar');
        });
        Route::get('/editar', function () {
            return view('solicitante.chamado.editar');
        });

        Route::post('/ver', [App\Http\Controllers\solicitante\ChamadoController::class, 'show']);
        Route::get('/criar', [App\Http\Controllers\solicitante\ChamadoController::class, 'create']);
        Route::post('/criar', [App\Http\Controllers\solicitante\ChamadoController::class, 'store']);
        Route::get('/editar', [App\Http\Controllers\solicitante\ChamadoController::class, 'edit']);
        Route::post('/editar', [App\Http\Controllers\solicitante\ChamadoController::class, 'update']);
    });

    Route::prefix('perfil')->group(function () {
        Route::get('/ver', [App\Http\Controllers\solicitante\PerfilController::class, 'show']);
        Route::get('/editar', [App\Http\Controllers\solicitante\PerfilController::class, 'edit']);
        Route::post('/editar', [App\Http\Controllers\solicitante\PerfilController::class, 'update']);

    });
});


Route::prefix('atendente')->group(function () {
    Route::prefix('chamado')->group(function () {
        Route::get('/ver', function () {
            return view('atendente.chamado.ver');
        });
        Route::get('/criar', function () {
            return view('atendente.chamado.criar');
        });
        Route::get('/editar', function () {
            return view('atendente.chamado.editar');
        });

    });

    Route::prefix('perfil')->group(function () {
        Route::get('/ver', [App\Http\Controllers\solicitante\PerfilController::class, 'getVer']);
        Route::get('/editar', [App\Http\Controllers\solicitante\PerfilController::class, 'show']);
        Route::post('/editar', [App\Http\Controllers\solicitante\PerfilController::class, 'update']);
        Route::post('/ver', [App\Http\Controllers\solicitante\PerfilController::class, 'ver']);
    });
});


Route::prefix('adm')->group(function () {
    Route::prefix('chamado')->group(function () {
        Route::get('/ver', function () {
            return view('adm.chamado.ver');
        });
        Route::get('/criar', function () {
            return view('adm.chamado.ver');
        });
        Route::get('/editar', function () {
            return view('adm.chamado.ver');
        });
        Route::get('/excluir', function () {
            return view('adm.chamado.ver');
        });

   
    });

    Route::prefix('gestao')->group(function () {
        Route::get('/ver', function () {
            return view('adm.gestao.ver');
        });
   
    });

    Route::prefix('perfil')->group(function () {
        Route::get('/ver', function () {
            return view('adm.perfil.ver');
        });
        Route::get('/editar', function () {
            return view('adm.perfil.editar');
        });
    });
});
