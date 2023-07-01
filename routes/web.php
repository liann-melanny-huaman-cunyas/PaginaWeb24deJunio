<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;


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
})->name('listado');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/Enviodatos', [GradeController::class, 'Insertar'])->name('Enviodatos');

require __DIR__.'/auth.php';