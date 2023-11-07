@extends('layout.admin.admin')

@section('title', 'Tambah Promo')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.promo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="Promo" class="form-label">Nama Promo</label>
                        <input type="text" name="promo_name" id="Promo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="syarat" class="form-label">Syarat & Ketentuan</label>
                        <textarea name="syarat" id="syarat" class="form-control" cols="30" rows="10">

                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Promo</label>
                        <input type="text" name="kode_promo" class="form-control" id="kode" placeholder="A81lsa">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection