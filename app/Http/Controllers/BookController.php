<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index(Request $request)
    {
        // Accept only one of the three real statuses; anything else means "All"
        $status = $request->query('status');
        if (! in_array($status, array_keys(Book::STATUSES), true)) {
            $status = null;
        }

        $books = Book::query()
            ->when($status, fn ($query) => $query->where('status', $status))
            ->latest()
            ->get();

        return view('books.index', ['books' => $books, 'status' => $status]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create($this->validated($request));

        return redirect()->route('books.index')->with('success', 'Book added.');
    }

    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request, Book $book)
    {
        $book->update($this->validated($request));

        return redirect()->route('books.index')->with('success', 'Book updated.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted.');
    }

    // One set of rules, used for both adding and editing a book
    private function validated(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'status' => ['required', Rule::in(array_keys(Book::STATUSES))],
        ]);
    }
}
