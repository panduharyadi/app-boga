@extends('layout.admin.admin')

@section('title', 'Transaksi')

@section('content')

    <div class="container">
      <div class="card">
        <div class="card-body">
          <a href="{{ route('admin.transaksi.add') }}" class="btn btn-primary">Tambah Transaksi</a>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Nama Pemesan</th>
                            <th>Pesanan</th>
                            <th>Alamat</th>
                            <th>Promo</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($transaksi as $tr)
                        <tr>
                              <td>{{ $tr->user->name }}</td>
                              <td>{{ $tr->menu->menu_name }}</td>
                              <td>{{ $tr->alamat->alamat }}</td>
                              <td>{{ $tr->promo->promo_name }}</td>
                              <td>{{ $tr->qty }}</td>
                              <td>{{ $tr->total_price }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        
          </div>
    </div>
@endsection