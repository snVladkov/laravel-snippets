<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/create', [BookController::class, 'create'])->name('books_create');
Route::post('/books', [BookController::class, 'store'])->name('books_store');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books_edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books_update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books_destroy');
