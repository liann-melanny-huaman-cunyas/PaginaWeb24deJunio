<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ComunicadoController;



    Route::get('/conocenos', function () {
        return view('conocenos');
    })->name('conocenos');

    Route::get('/contactenos', function () {
        return view('contactenos');
    })->name('contactenos');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


    Route::get('/', [ComunicadoController::class, 'index'])->name('inicio');


    Route::get('/listado', [NotaController::class, 'index'])->name('listado');
    Route::get('/notas/create', [NotaController::class, 'create'])->name('notas.create');
    Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
    Route::delete('/notas/{id}', [NotaController::class, 'destroy'])->name('notas.destroy');
    Route::get('/notas/{id}', [NotaController::class, 'show'])->name('notas.show');

    Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias');
    Route::get('/noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
    Route::post('/noticias', [NoticiaController::class, 'store'])->name('noticias.store');
    Route::delete('/noticias/{id}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');
    Route::get('/noticias/listado', [NoticiaController::class, 'listado'])->name('noticias.listado');

    Route::get('/comunicados', [ComunicadoController::class, 'index'])->name('comunicados');
    Route::get('/comunicados/create', [ComunicadoController::class, 'create'])->name('comunicados.create');
    Route::post('/comunicados', [ComunicadoController::class, 'store'])->name('comunicados.store');
    Route::delete('/comunicados/{id}', [ComunicadoController::class, 'destroy'])->name('comunicados.destroy');
    Route::get('/comunicados/listado', [ComunicadoController::class, 'listado'])->name('comunicados.listado');


require __DIR__.'/auth.php';