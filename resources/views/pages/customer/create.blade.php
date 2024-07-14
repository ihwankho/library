@extends('layouts.app')

@section('body')
    <h1 class="mb -0">Add Customer</h1>
    <hr />
    <form action="{{ route('customer.store') }}" method="POST">
    @csrf
    <div class="row mb-3">
  <div class="col">
    <input type="text" name="id_customer" class="form-control" placeholder="ID Customer">
  </div>
  <div class="col">
    <input type="text" name="name" class="form-control" placeholder="Nama">
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <input type="text" name="phone" class="form-control" placeholder="Nomor telpon">
  </div>
  <div class="col">
<textarea class="form-control" name="description" placeholder="Alamat"></textarea>
    </div>
    
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">submit</button>
        </div>
    </div>
</form>
@endsection