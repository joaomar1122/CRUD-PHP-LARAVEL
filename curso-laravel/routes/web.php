<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

use Illuminate\Http\Request;
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

Route::prefix('teste')->group(function () {
    Route::get('/', [TesteController::class, 'index'])->name('teste-index');
    Route::get('/create', [TesteController::class, 'create'])->name('teste-create');
    Route::post('/', [TesteController::class, 'store'])->name('teste-store');
    Route::get('/{id}/edit', [TesteController::class, 'edit'])->where('id', '[0-9]+')->name('teste-edit');
    Route::put('/{id}', [TesteController::class, 'update'])->where('id', '[0-9]+')->name('teste-update');
    Route::delete('/{id}', [TesteController::class, 'destroy'])->where('id', '[0-9]+')->name('teste-destroy');
});



Route::fallback(function () {
    return "Erro Rota Não Encontrada";
});
