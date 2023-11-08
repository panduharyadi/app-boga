@extends('layout.user.wasoto')

@section('title', 'Checkout')
<style>
  .card {
    border-radius: 10px;
    background: #FFF;
    box-shadow: 0px 4px 4px 2px rgba(0, 0, 0, 0.25);
    margin-top: 80px;
  }

  .bank {
    text-align: center;
  }

  .no-rek {
    margin-top: 20px;
    font-family: bold;
  }

  .item-req {
    text-align: justify;
  }

</style>

@section('content')

<div class="container mb-3">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('user.transaksi.wasoto.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="pemesan">Pemesan</label>
          <input type="text" class="form-control" id="pemesan" value="{{ Auth::user()->name }}" readonly required>
        </div>
        @foreach ($menu as $m)
        <div class="form-group">
          <input type="hidden" name="menuid" value="{{ $m->id }}">
          <label for="pesanan">Pesanan</label>
          <input type="text" class="form-control" id="pesanan" name="pesanan" value="{{ $m->menu_name }}" readonly required>
        </div>
        <div class="form-group">
          <label for="price">Harga</label>
          <input type="text" name="price" id="price" class="form-control price" value="{{ $m->price }}" readonly required>
        </div>
      @endforeach
      <div class="form-group" hidden>
        <label for="promo">Promo</label>
        <input type="text" name="promo" value="0">
      </div>
        @foreach ($alamat as $a)
        <div class="form-group">
          <input type="hidden" name="alamatid" value="{{ $a->id }}">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $a->alamat }}" readonly required>
        </div>
        @endforeach
        <div class="form-group">
          <label for="qty">Jumlah</label>
          <input type="text" class="form-control qty" id="qty" name="qty" required>
        </div>
        <div class="form-group">
          <label for="metode_pembayaran">Pilih Pembayaran Mu</label>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Klik untuk pilih metode pembayaran
          </button>
        </div>
        <div class="form-group">
          <label for="bukti_tf">Bukti Tf</label>
          <input type="file" class="form-control-file" id="bukti_tf" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary ">Submit</button>
      </form>
    </div>
  </div>
</div>

{{-- <div class="container mb-3">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('user.transaksi.wasoto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="pemesan">Pemesan</label>
              <input type="text" class="form-control" id="pemesan" value="{{ Auth::user()->name }}">
            </div>
            
            @foreach ($alamat as $a)
            <div class="form-group">
              <input type="hidden" name="alamatid" value="{{ $a->id }}">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $a->alamat }}">
            </div>
            @endforeach
            <div class="form-group">
              <label for="qty">Jumlah</label>
              <input type="text" class="form-control qty" id="qty" name="qty" required>
            </div>
            
            <div class="form-group">
              <label for="bukti_tf" class="form-label">Bukti Transfer</label>
              <input type="file" class="form-control" id="bukti_tf" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          @foreach ($menu as $m)
            <div class="form-group">
              <input type="hidden" name="menuid" value="{{ $m->id }}">
              <label for="pesanan">Pesanan</label>
              <input type="text" class="form-control" id="pesanan" name="pesanan" value="{{ $m->menu_name }}">
            </div>
            <div class="form-group">
              <label for="price">Harga</label>
              <input type="text" name="price" id="price" class="form-control price" value="{{ $m->price }}">
            </div>
          @endforeach
          <div class="form-group" hidden>
            <label for="promo">Promo</label>
            <input type="hidden" name="promo" class="form-control" value="0">
          </div>
        </form>
        </div>
      </div>
    </div>
    
  </div>
</div> --}}
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Metode Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bank">
        <h4>Rekening Bank</h4>
        <img src="{{ asset('user/images/mandiri.webp') }}" width="150px;" alt="">
        <h6 class="no-rek">1111 1111 1111 1</h6>
        <ol class="req">
          <li class="item-req">Buka mobile banking anda lalu transfer dengan jumlah yang sesuai</li>
          <li class="item-req">Pastikan no rekening sesuai</li>
          <li class="item-req">Screenshot bukti transfer</li>
        </ol>
        <hr>
        <h5>Transfer dengan Qris</h5>
        <img src="{{ asset('user/images/qris.webp') }}" width="150px;" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>