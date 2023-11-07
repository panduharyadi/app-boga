@extends('layout.admin.admin')

@section('title', 'Tambah Category')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="category" class="form-label">Nama Category</label>
                        <input type="text" name="category_name" id="category" class="form-control" placeholder="Best Seller">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection