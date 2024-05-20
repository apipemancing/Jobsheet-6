@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Game</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('books.update', $book->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Nama Game</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
                            </div>

                            <div class="form-group">
                                <label for="author">Nama Dev</label>
                                <input type="text" class="form-control" id="author" name="author" value="{{ $book->detail->author }}">
                            </div>

                            <div class="form-group">
                                <label for="published_year">Tahun Rilis</label>
                                <input type="text" class="form-control" id="published_year" name="published_year" value="{{ $book->detail->published_year }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
