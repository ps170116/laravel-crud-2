<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Generator;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', ['books' => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Book = new Book;
        $Book->title = $request->title;
        $Book->description = $request->description;
        $Book->author_id = $request->author_id;
        $Book->release_date = $request->release_date;
        $Book->save();
        return redirect('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $fields = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'author_id' => 'required',
                'release_date' => 'required',
            ]);
            $book->update($fields);
            return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(('/books'));

    }
}
