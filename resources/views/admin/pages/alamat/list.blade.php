@extends('layout.admin.admin')

@section('title', 'Alamat')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.alamat.add') }}" class="btn btn-primary">Tambah Alamat</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No Handphone</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alamat as $a)    
                            <tr>
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ $a->nohp }}</td>
                                <td>{{ $a->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection