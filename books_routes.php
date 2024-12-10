<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/create', [BookController::class, 'create'])->name('books_create');
Route::post('/books', [BookController::class, 'store'])->name('books_store');
Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books_edit');
Route::put('/books/update/{id}', [BookController::class, 'update'])->name('books_update');
Route::delete('/books/destroy/{id}', [BookController::class, 'destroy'])->name('books_destroy');
