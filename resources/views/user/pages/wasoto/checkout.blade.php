@extends('layout.user.wasoto')

@section('title', 'Checkout')
<style>
  .card {
    border-radius: 10px;
    background: #FFF;
    box-shadow: 0px 4px 4px 2px rgba(0, 0, 0, 0.25);
    margin-top: 80px;
  }
</style>

@section('content')
<div class="container">
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
            {{-- @foreach ($promo as $p)
            {{-- <div class="form-group">
              <input type="hidden" name="promoid" value="{{ $p->id }}">
              <label for="promo">Promo</label>
              <input type="text" class="form-control" id="promo" name="promo" value="{{ $p->promo_name }}">
            </div>
            @endforeach --}} 
            <div class="form-group">
              <label for="qty">Jumlah</label>
              <input type="text" class="form-control qty" id="qty" name="qty">
            </div>
            
            <div class="form-group">
              <label for="bukti_tf" class="form-label">Bukti Transfer</label>
              <input type="file" class="form-control" id="bukti_tf" name="image">
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
          <div class="form-group">
            <label for="promo">Promo</label>
            <input type="text" name="promo" class="form-control">
          </div>
          <div class="form-group">
            <label for="total_price">Total</label>
            <input type="text" class="form-control total" id="total_price" name="total_price">
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection