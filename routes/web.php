<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\InicioControlller;

    Route::get('/inicio', [InicioControlller::class, 'index'])->name('inicio');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::get('/notas', [NotaController::class, 'index'])->name('listado');
    Route::get('/notas/create', [NotaController::class, 'create'])->name('notas.create');
    Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
    Route::delete('/notas/{id}', [NotaController::class, 'destroy'])->name('notas.destroy');
    Route::get('/notas/{id}', [NotaController::class, 'show'])->name('notas.show');
    Route::get('/notas/{id}/edit', [NotaController::class, 'edit'])->name('notas.edit');
    Route::put('/notas/{id}', [NotaController::class, 'update'])->name('notas.update');

    Route::get('/noticias', [NoticiaController::class, 'index'])->name('listadonoticias');
    Route::get('/noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
    Route::post('/noticias', [NoticiaController::class, 'store'])->name('noticias.store');
    Route::delete('/noticias/{id}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');
    Route::get('/notas/{id}', [NoticiaController::class, 'show'])->name('noticias.show');
    Route::get('/noticias/{id}/edit', [NoticiaController::class, 'edit'])->name('noticias.edit');
    Route::put('/noticias/{id}', [NoticiaController::class, 'update'])->name('noticias.update');

    Route::get('/comunicados', [ComunicadoController::class, 'index'])->name('listadocomunicados');
    Route::get('/comunicados/create', [ComunicadoController::class, 'create'])->name('comunicados.create');
    Route::post('/comunicados', [ComunicadoController::class, 'store'])->name('comunicados.store');
    Route::delete('/comunicados/{id}', [ComunicadoController::class, 'destroy'])->name('comunicados.destroy');
    Route::get('/comunicados/{id}', [ComunicadoController::class, 'show'])->name('comunicados.show');
    Route::get('/comunicados/{id}/edit', [ComunicadoController::class, 'edit'])->name('comunicados.edit');
    Route::put('/comunicados/{id}', [ComunicadoController::class, 'update'])->name('comunicados.update');



require __DIR__.'/auth.php';