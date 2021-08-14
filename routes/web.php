<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('professor',[App\Http\Controllers\ProfessorController::class,'index' ])->name('professor');

Route::get('chefe_departamento/professor',[App\Http\Controllers\ChefeDepartamentoController::class,'professor' ])->name('chefe_departamento.professor');
Route::get('chefe_departamento/lista_professores',[App\Http\Controllers\ChefeDepartamentoController::class,'listaProfessores' ])->name('chefe_departamento.lista_professores');
Route::get('chefe_departamento/lista_disciplinas',[App\Http\Controllers\ChefeDepartamentoController::class,'listaDisciplinas' ])->name('chefe_departamento.lista_disciplinas');

Route::get('estudante',[App\Http\Controllers\EstudanteController::class,'index' ])->name('estudante');
Route::get('estudante/avaliacao/{id}', [App\Http\Controllers\EstudanteController::class, 'create'])->name('estudante.avaliacao');


Route::get('resultado_avaliacao',[App\Http\Controllers\ResultadoAvaliacaoController::class,'index' ])->name('resultado_avaliacao');
