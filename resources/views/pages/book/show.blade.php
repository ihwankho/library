@extends('layouts.app')

@section('body')
    <h1 class="mb -0">Detail Customer</h1>
    <hr />
    <div class="row mb-3">
  <div class="col">
    <label for="description" class="form-label">Nama:</label>
    <input type="text" name="author" class="form-control" placeholder="Autor" value="{{ $book->author }}" readonly>
  </div>
  <div class="col">
    <label for="description" class="form-label">ID Customer:</label>
    <input type="text" name="name" class="form-control" placeholder="Book name" value="{{ $book->name }}" readonly>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <label for="description" class="form-label">Nomor Telpon</label>
    <input type="text" name="year" class="form-control" placeholder="Year" value="{{ $book->year }}" readonly>
  </div>
  <div class="col">
    <label for="description" class="form-label">Alamat:</label>
    <textarea id="description" class="form-control" name="description" placeholder="Description" readonly style="width: 100%; height: auto;">{{ $book->description }}</textarea>
</div>
    </div>
@endsection 