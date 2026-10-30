@extends('layouts.app')

@section('title', 'Edit book')

@section('content')
    <h2>Edit book</h2>

    <form method="POST" action="{{ route('books.update', $book) }}">
        @csrf
        @method('PUT')
        @include('books._form', ['book' => $book, 'submitLabel' => 'Update book'])
    </form>
@endsection
