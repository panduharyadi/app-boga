@extends('layout.admin.admin')

@section('title', 'Category')

@section('content')

    <div class="container">
        <a href="{{ route('admin.category.add') }}" class="btn btn-primary">Tambah Category</a>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $cat)    
                        <tr>
                            <td>{{ $cat->category_name }}</td>
                            <td>
                                <a href="" class="btn btn-info">Tampilin Menu</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection