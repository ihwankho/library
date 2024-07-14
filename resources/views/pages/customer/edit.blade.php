@extends('layouts.app')

@section('body')
    <h1 class="mb -0">Edit Customer</h1>
    <hr />
    <form action="{{ route('customer.update', $customer->id) }}" method="post">
        @csrf
        @method('PUT')
    <div class="row mb-3">
  <div class="col">
    <label for="description" class="form-label">ID Customer:</label>
    <input type="text" name="id_customer" class="form-control" placeholder="customer name" value="{{ $customer->id_customer }}">
  </div>
  <div class="row mb-3">
  <div class="col">
    <label for="description" class="form-label">Nama:</label>
    <input type="text" name="name" class="form-control" placeholder="Autor" value="{{ $customer->name }}">
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <label for="description" class="form-label">Nomor Telpon:</label>
    <input type="text" name="phone" class="form-control" placeholder="phone" value="{{ $customer->phone }}">
    </div>
    <div class="row mb-3">
        <div class="col">
          <label for="description" class="form-label">Alamat</label>
    <textarea class="form-control" name="description" placeholder="Description" >{{ $customer->description }}</textarea>
    </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">update</button>
        </div>
    </div>
   </form>
@endsection