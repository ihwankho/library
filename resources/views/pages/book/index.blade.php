@extends('layouts.app')

@section('body')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Customer</h1>
    <a href="{{ route('book.create') }}" class="btn btn-primary">Add Customer</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
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
        @forelse($books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Customer Actions">
                    <a href="{{ route('book.show', $book->id) }}" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('book.destroy', $book->id) }}" method="POST">
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
