<!-- resources/views/books/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $book->title }}</h2>
        <p><strong>Dev:</strong> {{ $book->detail->author }}</p>
        <p><strong>Published Year:</strong> {{ $book->detail->published_year }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
