@extends('layouts.app')

@section('title', 'My books')

@section('content')
    <p><a class="btn" href="{{ route('books.create') }}">Add book</a></p>

    @if ($books->isEmpty())
        <p>No books yet.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->statusLabel() }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
