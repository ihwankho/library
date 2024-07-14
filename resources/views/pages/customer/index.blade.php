@extends('layouts.app')

@section('body')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Customer</h1>
    <a href="{{ route('customer.create') }}" class="btn btn-primary">Add Customer</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

@if(Session::has('farid'))
<div class="alert alert-success" role="alert">
    {{ Session::get('farid') }}
</div>
@endif

<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>id_customer</th>
            <th>nama</th>
            <th>no_telpon</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($customers as $customer)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $customer->id_customer }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Customer Actions">
                    <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Customer not found</td>
        </tr>
        @endforelse
    </tbody>
</table>
<form method="POST" action="{{ route('logout') }}" class="d-flex justify-content-end align-items-end">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
@endsection
