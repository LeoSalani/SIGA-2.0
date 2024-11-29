<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
  return Inertia::render('Auth/Login');
});

// ! TODAS ESSAS ROTAS DEVEM VOLTAR A ESTAR AUTENTICADAS APÓS O BACKEND ESTIVER PRONTO!
// ADICIONAR ->middleware(['auth', 'verified'])

Route::get('/home', [StudentController::class, 'pegarDadosAluno']);

Route::post('/registrar_aluno', [StudentController::class, 'registrarAlunos']);

Route::get('/csrf_token', function () {
  return response()->json(['csrf_token' => csrf_token()]);
});

Route::get(uri: '/aluno/notas', action: function () {
  return Inertia::render('Aluno/Notas');
})->name(name: "aluno/notas");

Route::get(uri: '/aluno/horario', action: function () {
  return Inertia::render('Aluno/Horario');
})->name(name: "aluno/horario");

Route::get(uri: '/aluno/solicitacoes', action: function () {
  return Inertia::render('Aluno/Solicitacoes');
})->name(name: "aluno/solicitacoes");

Route::get(uri: '/aluno/materias', action: function () {
  return Inertia::render('Aluno/Materias');
})->name(name: "aluno/materias");


// Manter aqui rotas que precisam ter autenticação do usuário
Route::middleware('auth')->group(function () {
  Route::get(uri: '/aluno/home', action: function () {
    return Inertia::render('Aluno/Home');
  })->name(name: "aluno/home");

  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
