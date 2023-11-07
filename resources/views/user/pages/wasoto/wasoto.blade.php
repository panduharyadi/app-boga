@extends('layout.user.wasoto')

@section('title', 'wasoto')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach ($promo as $p)
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
  <h2><b>Semua Menu</b></h2>
</div>
<div class="container">
  <div class="owl-carousel owl-theme mb-3">
    @foreach ($menus as $menu)
      <div class="item container">
        <div class="card mt-4" style="width: 12rem;">
          <img src="{{ $menu->image }}" class="card-img-top" alt="{{ $menu->menu_name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $menu->menu_name }}</h5>
            <p>Rp. {{ $menu->price }}</p>
              <a href="{{ route('login') }}" class="icon-cart">
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
    @endforeach
  </div>
</div>

<div class="container mt-4">
  <h2><b>Best Seller</b></h2>
</div>
<div class="container">
  <div class="owl-carousel owl-theme mb-3">
    @foreach ($best as $b)
      <div class="item container">
        <div class="card mt-4" style="width: 12rem;">
          <img src="{{ $b->image }}" class="card-img-top" alt="{{ $b->menu_name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $b->menu_name }}</h5>
            <p>Rp. {{ $b->price }}</p>
              <a href="{{ route('login') }}" class="icon-cart">
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
    @endforeach
  </div>
</div>
@endsection