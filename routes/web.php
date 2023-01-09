<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\ProjetController;

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

Route::get('/projet', [ProjetController::class, 'projet'])->name('liste.projet');
Route::get('/ajout', [ProjetController::class, 'ajout'])->name('ajout.projet');
Route::post('/store', [ProjetController::class, 'store'])->name('store.projet');
Route::get('/delete/{id}', [ProjetController::class, 'delete'])->name('delete.projet');
Route::get('/edit/{id}', [ProjetController::class, 'edit'])->name('edit.projet');
Route::post('/update/{id}', [ProjetController::class, 'update'])->name('update.projet');
Route::get('/detail/{id}', [ProjetController::class, 'detail'])->name('detail.projet');


Route::get('/phase/{id}', [PhaseController::class, 'phase'])->name('phase.projet');
Route::post('/store_phase', [PhaseController::class, 'storePhase'])->name('store.phase');
Route::get('/supprimer/{id}', [PhaseController::class, 'supprimer'])->name('supprimer.phase');
Route::get('/editer/{id}', [PhaseController::class, 'editer'])->name('editer.phase');
Route::post('/updated/{id}', [PhaseController::class, 'updated'])->name('updated.phase');



