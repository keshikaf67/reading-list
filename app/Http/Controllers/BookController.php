<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();

        return view('books.index', ['books' => $books]);
    }
}
