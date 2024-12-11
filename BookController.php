<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all()->toArray();
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:4',
            'author' => 'required|min:4',
            'year' => 'required|integer',
        ]);

        if (Book::create($data)) {
            return redirect()->route('books')->with('success', 'Успешно добавена книга');
        } else {
            return redirect()->route('books_create')->with('error', 'Грешка при добавяне на книга');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id)->toArray();
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|min:4',
            'author' => 'required|min:4',
            'year' => 'required|integer',
        ]);

        $book = Book::find($id);

        if ($book->update($data)) {
            return redirect()->route('books')->with('success', 'Успешно редактирана книга');
        } else {
            return redirect()->route('books_edit', $id)->with('error', 'Грешка при редакция на книга');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);

        if ($book->delete()) {
            return redirect()->route('books')->with('success', 'Успешно изтрита книга');
        } else {
            return redirect()->route('books')->with('error', 'Грешка при изтриване на книга');
        }
    }
}
