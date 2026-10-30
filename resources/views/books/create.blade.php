@extends('layouts.app')

@section('title', 'Add book')

@section('content')
    <h2>Add a book</h2>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        @include('books._form', ['book' => new \App\Models\Book(), 'submitLabel' => 'Save book'])
    </form>
@endsection
