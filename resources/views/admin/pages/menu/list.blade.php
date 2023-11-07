@extends('layout.admin.admin')

@section('title', 'Menu')

@section('content')

    <div class="container">
        <a href="{{ route('admin.menu.add') }}" class="btn btn-primary">Tambah Menu</a>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Menu</th>
                            <th>Category</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td><img src="{{ asset($menu->image) }}" alt="" width="80"></td>
                                <td>{{ $menu->menu_name }}</td>
                                <td>
                                    @if($menu->category->category_name === 'Favorite')
                                        <span class="badge bg-warning">
                                            {{ $menu->category->category_name }}
                                        </span>
                                    @elseif ($menu->category->category_name === 'Best Seller')
                                        <span class="badge bg-primary">
                                            {{ $menu->category->category_name }}
                                        </span>
                                    @elseif ($menu->category->category_name === 'Drink')
                                        <span class="badge bg-secondary">
                                            {{ $menu->category->category_name }}
                                        </span>
                                    @elseif ($menu->category->category_name === 'a La Carte')
                                        <span class="badge bg-success">
                                            {{ $menu->category->category_name }}
                                        </span>
                                    @endif
                                </td>
                                <td>{{ $menu->price }}</td>
                            </tr>     
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection