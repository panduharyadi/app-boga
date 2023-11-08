<link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{ asset('user/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- slidck slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map" integrity="undefined" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">
  <!-- Custom styles for this template -->
  <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet" />

  <style>
    .navigasi {
        float: left;
        background: #D9D9D9;
        width: 100%;
    }

    .navigasi li {
        float: left;
        list-style: none;
    }

    .navigasi li a {
        color: #fff;
        text-decoration: none;
        padding: 20px;
        display: block;
        font-weight: bold;
    }

    .center ul {
        width: --moz-fit-content;
        width: --webkit-fit-content;
        width: fit-content;
        margin: auto;
    }

    .carousel {
        margin-top: 80px;
    }

   .icon-cart {
      margin-left: 120px;
      color:black;
   }

   @media (min-width: 576px) { 
        .offline {
            margin-right: -100px !important;
            justify-content: center;
            align-content: center;
            align-items: center;
        }
    }

    @media (min-width: 300px) {
        .btn-wasoto {
            margin-left: 47px ;
        }
    }
    
    @media (min-width: 375px) {
        .btn-wasoto {
            margin-left: 45px ;
        }
    }
    
    @media (min-width: 400px) {
        .btn-wasoto {
            margin-left: 55px ;
        }
    }
    
    /* Device Tablet */
    @media(min-width: 480px) {
        .btn-wasoto {
            margin-left: 135px !important;
        }
    }
    
    @media(min-width: 700px) {
        .btn-wasoto {
            margin-left: 210px ;
        }
    }
    
    /* Device noteBook */
    @media(min-width: 1000px) {
        .btn-wasoto {
            margin-left: 22px !important;
        }
    }

    .card {
      border-radius: 20px;
      background: #fff;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .card input {
      border-radius: 10px;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .wsk-cp-product{
      background:#fff;
      padding:15px;
      border-radius:6px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
      position:relative;
      margin:20px auto;
      /* width: 12rem; */
    }

    .wsk-cp-img{
      position:absolute;
      top:5px;
      left:50%;
      transform:translate(-50%);
      -webkit-transform:translate(-50%);
      -ms-transform:translate(-50%);
      -moz-transform:translate(-50%);
      -o-transform:translate(-50%);
      -khtml-transform:translate(-50%);
      width: 100%;
      padding: 15px;
      transition: all 0.2s ease-in-out;
    }

    .wsk-cp-img img{
      width:100%;
      transition: all 0.2s ease-in-out;
      border-radius:6px;
    }

    .wsk-cp-product:hover .wsk-cp-img{
      top:-40px;
    }

    .wsk-cp-product:hover .wsk-cp-img img{
      box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
    }

    .wsk-cp-text{
      padding-top:100%; /* 100% */
    }

    .wsk-cp-text .category{
      text-align:center;
      font-size:12px;
      font-weight: bold;
      padding:5px;
      margin-bottom:45px;
      position:relative;
      transition: all 0.2s ease-in-out;
    }

    .wsk-cp-text .category > *{
      position:absolute;
      top:auto;
      left:50%;
      transform: translate(-50%,-50%);
      -webkit-transform: translate(-50%,-50%);
      -moz-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
      -o-transform: translate(-50%,-50%);
      -khtml-transform: translate(-50%,-50%);   
    }

    .wsk-cp-text .category > span{
      padding: 12px 30px;
      border: 1px solid #313131;
      background:#212121;
      color:#fff;
      box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
      border-radius:27px;
      transition: all 0.05s ease-in-out; 
    }

    .wsk-cp-product:hover .wsk-cp-text .category > span{
      border-color:#ddd;
      box-shadow: none;
      padding: 11px 28px;
    }

    .wsk-cp-product:hover .wsk-cp-text .category{
      margin-top: 0px;
    }

    .wsk-cp-text .title-product{
      text-align:center;
    }

    .wsk-cp-text .title-product h3{
      font-size:20px;
      font-weight:bold;
      margin:15px auto;
      overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
      width:100%;
    }

    .wsk-cp-text .description-prod p{
      margin:0;
    }

    /* Truncate */
    .wsk-cp-text .description-prod {
      text-align:center;
      width: 100%;
      height:62px;
      overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
      margin-bottom:15px;
    }

    .card-footer{
      padding: 25px 0 5px;
      border-top: 1px solid #ddd;
    }

    .card-footer:after, .card-footer:before{
      content:'';
      display:table;
    }

    .card-footer:after{
      clear:both;
    }

    .card-footer .wcf-left{
      float:left;
      
    }

    .card-footer .wcf-right{
      float:right;
    }

    .price{
      font-size:18px;
      font-weight:bold;
    }

    a.buy-btn{
      display:block;
      color:#212121;
      text-align:center;
      font-size: 18px;
      width:30px;
      height:30px;
      line-height:35px;
      border-radius:50%;
      border:1px solid #212121;
      transition: all 0.2s ease-in-out;
    }
    a.buy-btn:hover , a.buy-btn:active, a.buy-btn:focus{
      border-color: #FF9800;
      background: #FF9800;
      color: #fff;
      text-decoration:none;
    }
    .wsk-btn{
      display:inline-block;
      color:#212121;
      text-align:center;
      font-size: 18px;
      transition: all 0.2s ease-in-out;
      border-color: #FF9800;
      background: #FF9800;
      padding:12px 30px;
      border-radius:27px;
      margin: 0 5px;
    }
    .wsk-btn:hover, .wsk-btn:focus, .wsk-btn:active{
      text-decoration:none;
      color:#fff;
    }  
    .red{
      color:#F44336;
      font-size:22px;
      display:inline-block;
      margin: 0 5px;
    }
    @media screen and (max-width: 991px) {
      .wsk-cp-product{
        margin:40px auto;
      }
      .wsk-cp-product .wsk-cp-img{
      top:-40px;
    }
    .wsk-cp-product .wsk-cp-img img{
      box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
    }
      .wsk-cp-product .wsk-cp-text .category > span{
      border-color:#ddd;
      box-shadow: none;
      padding: 11px 28px;
    }
    .wsk-cp-product .wsk-cp-text .category{
      margin-top: 0px;
    }
    a.buy-btn{
      border-color: #FF9800;
      background: #FF9800;
      color: #fff;
    }
    }

  </style>