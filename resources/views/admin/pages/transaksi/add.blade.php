@extends('layout.admin.admin')

@section('title', 'Tambah Menu')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.transaksi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="pemesan" class="form-label">Pemesan</label>
                        <select name="pemesan" id="pemesan" class="form-control">
                            @foreach ($user as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pesanan" class="form-label">Pesanan</label>
                        <select name="pesanan" id="pesanan" class="form-control">
                            @foreach ($menu as $m)
                                <option value="{{ $m->id }}">{{ $m->menu_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <select name="alamat" id="alamat" class="form-control">
                            @foreach ($alamat as $a)
                                <option value="{{ $a->id }}">{{ $a->alamat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="promo" class="form-label">Promo</label>
                        <select name="promo" id="promo" class="form-control">
                            @foreach ($promo as $p)
                                <option value="{{ $p->id }}">{{ $p->promo_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="total_price" class="form-label">Total Price</label>
                        <input type="text" name="total_price" id="total_price" class="form-control" placeholder="90000">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection