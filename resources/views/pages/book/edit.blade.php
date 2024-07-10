@extends('layouts.app')

@section('body')
    <h1 class="mb -0">Edit Customer</h1>
    <hr />
    <form action="{{ route('book.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
    <div class="row mb-3">
  <div class="col">
    <label for="description" class="form-label">ID Customer:</label>
    <input type="text" name="name" class="form-control" placeholder="Book name" value="{{ $book->name }}">
  </div>
  <div class="row mb-3">
  <div class="col">
    <label for="description" class="form-label">Nama:</label>
    <input type="text" name="author" class="form-control" placeholder="Autor" value="{{ $book->author }}">
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <label for="description" class="form-label">Nomor Telpon:</label>
    <input type="text" name="year" class="form-control" placeholder="Year" value="{{ $book->year }}">
    </div>
    <div class="row mb-3">
        <div class="col">
          <label for="description" class="form-label">Alamat</label>
    <textarea class="form-control" name="description" placeholder="Description" >{{ $book->description }}</textarea>
    </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">update</button>
        </div>
    </div>
   </form>
@endsection