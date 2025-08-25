<?php

use App\Http\Controllers\GenreController;

Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');
Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
Route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');
Route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
Route::put('/genre/{id}', [GenreController::class, 'update'])->name('genre.update');
Route::delete('/genre/{id}', [GenreController::class, 'destroy'])->name('genre.destroy');