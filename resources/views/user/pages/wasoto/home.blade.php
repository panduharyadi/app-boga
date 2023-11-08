@extends('layout.user.wasoto')

@section('title', 'wasoto')
<style>
  .card {
    border-radius: 30px;
    background: #FFF;
    box-shadow: 0px 4px 4px 2px rgba(0, 0, 0, 0.25);
  }

  .welcome, p {
    text-align: center; 
  }

  .download {
    width: 300px;
    height: 150px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    text-align: center;
    border-radius: 20px;
  }

  .file {
    padding: 50px;
  }

  .profile {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 80px;
    height: 80px;
    background: black;
    border-radius: 50%;
    text-align: center;
    margin: auto;
  }
</style>

@section('content')

<div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach ($promos as $p)
      <div class="carousel-item active">
        <img src="{{ asset($p->image) }}" class="d-block w-100" alt="{{ $p->promo_name }}">
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

{{-- form --}}
<div class="container mt-4">
  <div class="card">
    <div class="card-body">
      <a href="">
        <div class="profile">
  
        </div>
      </a>
      <h2 class="welcome">Selamat Datang {{ Auth::user()->name }}</h2>
      <p>Selamat berbelanja!</p>
      <div class="card download">
        <div class="card-body ">
          <div class="file-download">
              <p class="file">File Download</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
  <div class="card alamat">
    <div class="card-body">
      <form action="{{ route('user.alamat.wasoto.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nohp" class="form-label">Nomor Handphone</label>
          <input type="text" name="nohp" class="form-control" placeholder="0895322290525" id="nohp">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" placeholder="Jl. Sugutamu" id="alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<div class="container mt-4">
  <h3><b>Semua Menu</b></h3>
  <div class="owl-carousel owl-theme">
      @foreach ($menu as $m)
      <div class="item">
              <div class="wsk-cp-product">
                  <div class="wsk-cp-img">
                      <img src="{{ asset($m->image) }}" alt=""> <!-- resolusi gambar harus 390 x 585 -->
                  </div>
                  <div class="wsk-cp-text">
                      
                      <div class="title-product">
                          <h3>{{ $m->menu_name }}</h3>
                      </div>
                  </div>
                  <div class="card-footer">
                      <div class="wcf-left">
                        <div class="container">
                          <span>Rp{{ $m->price }}</span>
                        </div>
                      </div>
                      <div class="wcf-right">
                        <a href="{{ route('user.wasoto.home.checkout', $m->id) }}" class="buy-btn">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-dollar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                            <path d="M13 17h-7v-14h-2"></path>
                            <path d="M6 5l14 1l-.575 4.022m-4.925 2.978h-8.5"></path>
                            <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                            <path d="M19 21v1m0 -8v1"></path>
                          </svg>
                        </a>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>

<div class="container mt-4">
  <h3><b>Best Seller</b></h3>
  <div class="owl-carousel owl-theme">
      @foreach ($bests as $b)
      <div class="item">
              <div class="wsk-cp-product">
                  <div class="wsk-cp-img">
                      <img src="{{ asset($b->image) }}" alt=""> <!-- resolusi gambar harus 390 x 585 -->
                  </div>
                  <div class="wsk-cp-text">
                      
                      <div class="title-product">
                          <h3>{{ $b->menu_name }}</h3>
                      </div>
                  </div>
                  <div class="card-footer">
                      <div class="wcf-left">
                          <span>Rp{{ $b->price }}</span>
                      </div>
                      <div class="wcf-right">
                        <a href="{{ route('user.wasoto.home.checkout', $b->id) }}" class="buy-btn">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-dollar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                            <path d="M13 17h-7v-14h-2"></path>
                            <path d="M6 5l14 1l-.575 4.022m-4.925 2.978h-8.5"></path>
                            <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                            <path d="M19 21v1m0 -8v1"></path>
                          </svg>
                        </a>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>


@endsection