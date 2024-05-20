<!-- resources/views/books/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Game</h2>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nama Game</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author">Nama Dev</label>
                <input type="text" name="author" id="author" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="published_year">Tahun Rilis</label>
                <input type="number" name="published_year" id="published_year" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
    </div>
@endsection
