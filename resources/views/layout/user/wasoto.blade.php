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

  <title>@yield('title')</title>


  <!-- bootstrap core css -->
  @include('user.components.css')

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    @include('user.components.navbar')
    <!-- end header section -->
  </div>


  <!-- about section -->

  @yield('content')

  <!-- end about section -->

  @include('user.components.footer')
  <!-- jQery -->
  @include('user.components.js')


</body>

</html>