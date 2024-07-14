@extends('layouts.app')

@section('body')
    <h1 class="mb -0">Detail Customer</h1>
    <hr />
    <div class="row mb-3">
  <div class="col">
    <label for="id_customer" class="form-label">ID Customer:</label>
    <input type="text" name="phone" class="form-control" placeholder="Autor" value="{{ $customer->id_customer }}" readonly>
  </div>
  <div class="col">
    <label for="description" class="form-label">Nama:</label>
    <input type="text" name="name" class="form-control" placeholder="customer name" value="{{ $customer->name }}" readonly>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <label for="description" class="form-label">Nomor Telpon</label>
    <input type="text" name="phone" class="form-control" placeholder="phone" value="{{ $customer->phone }}" readonly>
  </div>
  <div class="col">
    <label for="description" class="form-label">Description:</label>
    <textarea id="description" class="form-control" name="description" placeholder="Description" readonly style="width: 100%; height: auto;">{{ $customer->description }}</textarea>
</div>
    </div>
@endsection 