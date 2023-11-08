
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Delfood</title>
    @include('user.components.css')
    <style>
        .btn-wasoto {
        display: flex;
        width: 221.25px;
        height: 50px;
        padding: 11px -60px 12px 55.2px;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        border-radius: 45px;
        border: 1px solid #d2ab77;
        background: #d2ab77;
    }

    .btn-text {
        display: flex;
        width: 167.53px;
        height: 23px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #000;
        text-align: center;
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 5px; 
        text-transform: uppercase;
        text-align: center;
    }

    img {
        border-radius: 45px;
    }
    
    .img-promo {
        border-radius: 45px;
        box-shadow: 0px 4px 10px 2px rgba(0, 0, 0, 0.50);
    }
    </style>

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
              Alkindi Boga
            </span>
          </a>
          <div class="" id="">
            <div class="User_option">
              <a href="{{ route('login') }}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Login</span>
              </a>
              <form class="form-inline ">
                <input type="search" placeholder="Search" />
                <button class="btn  nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <img src="{{ asset('user/images/menu.png') }}" alt="">
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="blog.html">Blog</a>
                <a href="testimonial.html">Testimonial</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div class="container ">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="detail-box">
              <h1>
                Selamat datang di Alkindi Boga
              </h1>
              <p>
                Alkindi Boga Indonesia lahir dari permintaan masyarakat Indonesia dan semangat untuk melestarikan makanan khas Indonesia dengan nilai autentik, bersih, dan nikmat
              </p>
            </div>
            <div class="find_container ">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <form>
                      <div class="form-row ">
                        <div class="form-group col-lg-3">
                          <div class="btn-wasoto">
                              <a type="submit" href="{{ route('user.wasoto') }}" class="btn-text" style="color: black;">Wasoto by Kinditto</a>
                          </div>
                        </div>
                        <div class="form-group col-lg-3">
                          <div class="btn-wasoto">
                              <a type="submit" class="btn-text">Kafe Kinditto</a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider_container">
        <div class="item">
          <div class="img-box">
            <img src="{{ asset('user/images/menu/bbq(1).png') }}" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="{{ asset('user/images/menu/ng(1).png') }}" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="{{ asset('user/images/menu/njab(1).png') }}" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="{{ asset('user/images/menu/njar(1).png') }}" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="{{ asset('user/images/menu/rbe(1).png') }}" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="{{ asset('user/images/menu/somed(1).png') }}" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="{{ asset('user/images/menu/sopmedan(1).png') }}" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- recipe section -->
  <section class="recipe_section layout_padding-top">
    <div class="container">
    <div class="heading_container heading_center">
        <h2>
        Pilih tempat favoritmu
        </h2>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
              <div class="img-box">
              <img src="{{ asset('user/images/wasoto(1).jpeg') }}" class="box-img" alt="">
              </div>
              <div class="detail-box">
              <h4>
                  Wasoto by Kinditto
              </h4>
              </div>
          <div class="btn-box">
        <a href="#">
        Selengkapnya
        </a>
          </div>
    </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
            <div class="img-box">
            <img src="{{ asset('user/images/kafekindito(1).jpeg') }}" class="box-img" alt="">
            </div>
            <div class="detail-box">
            <h4>
                Kafe Kinditto
            </h4>
            </div>
        <div class="btn-box">
        <a href="">
        Selengkapnya
        </a>
    </div>
        </div>
        </div>
    </div>
    </div>
</section>

  <!-- end recipe section -->

  <!-- app section -->

  <section class="app_section" hidden>
    <div class="container">
      <div class="col-md-9 mx-auto">
        <div class="row">
          <div class="col-md-7 col-lg-8">
            <div class="detail-box">
              <h2>
                <span> Get the</span> <br>
                Delfood App
              </h2>
              <p>
                long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The poin
              </p>
              <div class="app_btn_box">
                <a href="" class="mr-1">
                  <img src="images/google_play.png" class="box-img" alt="">
                </a>
                <a href="">
                  <img src="images/app_store.png" class="box-img" alt="">
                </a>
              </div>
              <a href="" class="download_btn">
                Download Now
              </a>
            </div>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="img-box">
              <img src="images/mobile.png" class="box-img" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- end app section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="col-md-11 col-lg-10 mx-auto">
        <div class="heading_container heading_center">
          <h2>
            Tentang Kami
          </h2>
        </div>
        <div class="box">
          <div class="col-md-7 mx-auto">
            <div class="img-box">
              <img src="{{ asset('user/images/logoboga.png') }}" class="box-img" alt="">
            </div>
          </div>
          <div class="detail-box">
            <p style="text-align: justify;">
              Alkindi Boga Indonesia berdiri pada tahun 2020. Alkindi Boga Indonesia terdiri dari Wasoto by Kinditto dan Kafe Kinditto.
              Alkindi Boga Indonesia lahir dari permintaan masyarakat Indonesia dan semangat untuk melestarikan makanan khas Indonesia dengan nilai autentik,
              bersih dan nikmat. Alkindi Boga Indonesia menggambarkan kekayaan makanan khas.
              <br><br>
              Wasoto by Kinditto dan Kafe Kinditto menyediakan menu yang autentik, seperti soto Medan, Nasi Liwet, dan Nasi Goreng Melayu. 
              Seiring perkembangan waktu, kemudia kami menyediakan variasi lain yang enaknya juga bikin ketagihan, seperti Ayam retak, Chicken Steak, Omelet, dan aneka cemmilan, kopi, juga non kopi
              Alkindi Boga Indonesia juga bertekad untuk meyakinkan para konsumen bahwa semua menu di Wasoto by Kinditto dan Kafe Kinditto tidak mengandung Monosodium Glutamat(MSG).
              Semua bumbu dan rasa dari Wasoto by Kinditto dan Kafe Kinditto tidak akan pernah mengandung MSG.
              <br><br>
              <!--Sebagian besar komposisi bahan dan bumbu terdiri dari rempah-rempah alami pilihan yang membuat lezatnya Wasoto by Kinditto dan Kafe Kinditto tidak membuat kepala menjadi pusing-->
              <!--atau bahaya penyakit di kemudia hari.-->
      
              Hal ini menandakan semua menu makanan Wasoto by kinditto dan Kafe Kinditto aman, ramah dilidah, dan juga sangat aman untuk kesehatan.
              
              Wasoto by Kinditto dan Kafe Kinditto menjadi tempat bersantap favorit bagi masyarakat Indonesia, khususnya mahasiswa, pelajar, dan keluarga.
              Dengan mengusung suasana restoran yang autentik, nyaman dan dilengkapi berbagai fasilitas membuat setiap pengunjung makin betah dan selalu ingin kembali.
              
              Nikmati momen istimewa berkumpul bersama orang tersayang bersama Wasoto by kinditto dan Kafe Kinditto
            </p>
            <a href="">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- news section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="col-md-11 col-lg-10 mx-auto">
        <div class="heading_container heading_center">
          <h2>
            Promo Terbaru
          </h2>
        </div>
        <div class="row">
        <div class="col-md-6">
          <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <div class="img-promo img-box">
                    <img src="{{ asset('user/images/n1.jpg') }}" class="box-img" alt="">
                  </div>
                  <h4 class="mt-4">
                    Wasoto by Kindito
                  </h4>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="detail-box">
                  <div class="img-promo img-box">
                    <img src="{{ asset('user/images/n2.jpg') }}" class="box-img" alt="">
                  </div>
                  <h4 class="mt-4">
                    Wasoto by Kindito2
                  </h4>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev d-none" href="#customCarousel1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <div class="col-md-6">
          <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <div class="img-promo img-box">
                    <img src="{{ asset('user/images/n1.jpg') }}" class="box-img" alt="">
                  </div>
                  <h4 class="mt-4">
                    Kafe Kindito
                  </h4>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="detail-box">
                  <div class="img-promo img-box">
                    <img src="{{ asset('user/images/n2.jpg') }}" class="box-img" alt="">
                  </div>
                  <h4 class="mt-4">
                    Kafe Kindito2
                  </h4>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev d-none" href="#customCarousel1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end news section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="col-md-11 col-lg-10 mx-auto">
        <div class="heading_container heading_center">
          <h2>
            Testimonial
          </h2>
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="detail-box">
                <h4>
                  Ardha Safitri
                </h4>
                <p>
                  Sering pesen disini ga pernah kecewa deh sm makananny, SOP aym sih yg paling sering dipesen disini mantul soalny ðŸ˜…
                </p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
            </div>
            <div class="carousel-item">
              <div class="detail-box">
                <h4>
                  Wanda Nurisna
                </h4>
                <p>
                  Beberapa kali makan disini belum pernah ngerasa ga cocok sama rasa makanannya, tiap kali mau makan soto untuk dine in dengan vibes yg tenang dan ruangan yg adem selalu melipir ke wasoto
                </p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
            </div>
            <div class="carousel-item">
              <div class="detail-box">
                <h4>
                  Hod Susanto
                </h4>
                <p>
                  Nasi liwet daun jeruk dan ayam retaknya enak, sambalnya enak cuma kurang banyak. Harga standar makanan kekinian.
                </p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev d-none" href="#customCarousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <div class="footer_container" style="margin: 20px 0 0 10px;">
    <!-- info section -->
    <section class="info_section ">
      <div class="container">
        <h4>Kontak</h4>
        <p style="margin-top: 4px;"> <i class="fa fa-phone" aria-hidden="true"></i> 08119109430</p>
  
        <p><b>Kafe Kinditto</b>, <br> Jl. Wr. Sila, Cipedak, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630</p>
        <div class="contact_box">
          {{-- maps --}}
          <div class="mapouter">
            <div class="gmap_canvas" style="border-radius: 20px;">
              <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=500&amp;height=300&amp;hl=en&amp;q=Kafe Kinditto  Jl. Wr. Sila, Cipedak, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
              
              </iframe>
              <a href="https://connectionsgame.org/">Connections NYT</a>
            </div>
            <style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}.gmap_iframe {height:300px!important;}</style>
          </div>
        </div>
        <p style="margin-top: 20px;"><b>Wasoto by Kinditto</b>, <br> Jl. Siliwangi, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431</p>
        <div class="contact_box">
          <div class="mapouter">
            <div class="gmap_canvas" style="border-radius: 20px;">
              <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=500&amp;height=300&amp;hl=en&amp;q=wasoto&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
              
              </iframe>
              <a href="https://connectionsgame.org/">Connections NYT</a>
            </div>
            <style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}.gmap_iframe {height:300px!important;}</style>
          </div>
        </div>
        <div class="info_links">
          <ul>
            <li class="active">
              <a href="index.html">
                Beranda
              </a>
            </li>
            <li class="active">
              <a href="index.html">
                Menu
              </a>
            </li>
            <li>
              <a href="about.html">
                Tentang Kami
              </a>
            </li>
            <li>
              <a class="" href="blog.html">
                Wasoto by Kinditto
              </a>
            </li>
            <li>
              <a class="" href="testimonial.html">
                Kafe Kinditto
              </a>
            </li>
            <li>
              <a class="" href="testimonial.html">
                Hubungi Kami
              </a>
            </li>
          </ul>
        </div>
        <div class="social_box">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
          </a>
          <a href="">
            <i class="fa fa-youtube" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </section>
    <!-- end info_section -->
  
  
    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">PT Alkindi <b>Boga Indonesia</b></a><br>
          <!--Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>-->
        </p>
      </div>
    </footer>
    <!-- footer section -->
  
  </div>
  <!-- jQery -->
  @include('user.components.js')
</body>

</html>


{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
