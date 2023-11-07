@extends('layout.admin.admin')

@section('title', 'Promo')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.promo.add') }}" class="btn btn-primary">Tambah Promo</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul Promo</th>
                            <th>Syarat & Ketentuan</th>
                            <th>Kode Promo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($promo as $p)        
                        <tr>
                            <td><img src="{{ asset($p->image) }}" width="80" alt="{{ $p->promo_name }}"></td>
                            <td>{{ $p->promo_name }}</td>
                            <td>{{ $p->syarat }}</td>
                            <td>{{ $p->kode_promo }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection