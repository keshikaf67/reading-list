@extends('layouts.app')

@section('title', 'My books')

@section('content')
    <p><a class="btn" href="{{ route('books.create') }}">Add book</a></p>
    <p class="filters">
        <a href="{{ route('books.index') }}" @class(['active' => ! $status])>All</a>
        @foreach (\App\Models\Book::STATUSES as $value => $label)
            <a href="{{ route('books.index', ['status' => $value]) }}" @class(['active' => $status === $value])>{{ $label }}</a>
        @endforeach
    </p>
    @if ($books->isEmpty())
        <p>{{ $status ? 'No books with this status.' : 'No books yet. Add your first one!' }}</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->statusLabel() }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book) }}">Edit</a>

                            <form method="POST" action="{{ route('books.destroy', $book) }}" style="display: inline" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
