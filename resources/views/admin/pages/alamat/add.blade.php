@extends('layout.admin.admin')

@section('title', 'Tambah Alamat')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.alamat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">No Handphone</label>
                        <input type="text" name="nohp" id="nohp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" class="form-control" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection