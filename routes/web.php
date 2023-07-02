<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\NotaController;


Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/conocenos', function () {
    return view('conocenos');
})->name('conocenos');

Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');

Route::get('/comunicados', function () {
    return view('comunicados');
})->name('comunicados');

Route::get('/contactenos', function () {
    return view('contactenos');
})->name('contactenos');

Route::get('/listado', function () {
    return view('listado');
})->middleware(['auth', 'verified'])->name('listado');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/notas', [NotaController::class, 'index'])->name('notas.index');
Route::get('/notas/create', [NotaController::class, 'create'])->name('notas.create');
Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
Route::delete('/notas/{id}', [NotaController::class, 'destroy'])->name('notas.destroy');
Route::get('/notas/{id}', [NotaController::class, 'show'])->name('notas.show');

require __DIR__.'/auth.php';