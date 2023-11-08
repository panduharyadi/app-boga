
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Checkout</title>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-image: url('data:image/svg+xml,%3Csvg width="52" height="26" viewBox="0 0 52 26" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.4"%3E%3Cpath d="M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z" /%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
}

h1 {
  text-align: center;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h1>Responsive Checkout Form</h1>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="{{ route('user.wasoto.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Pemesan </label>
            <input type="text" id="fname" name="pemesan" placeholder="John M. Doe" value="{{ Auth::user()->name }}">
            @foreach ($alamat as $a)
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="alamat" placeholder="542 W. 15th Street" value="{{ $a->alamat }}">
              
              <label for="hp"><i class="fa fa-phone"></i> Phone</label>
              <input type="text" id="hp" name="nohp" placeholder="089878789u" value="{{ $a->nohp }}">
              @endforeach

            <div class="row">
              <div class="col-50">
                <label for="state">QTY</label>
                <input type="text" id="state" name="qty">
              </div>
            </div>
          </div>
        </div>
        <button type="submit" value="Continue to checkout" class="btn"> submit </button>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart</h4>
      @foreach ($menu as $m)
        <input type="hidden" name="menuid" value="{{ $m->id }}">
        <input type="text" class="form-control" name="pesanan" value="{{ $m->menu_name }}"> <input type="text" class="form-control" value="{{ $m->price }}">
      @endforeach
      <hr>
      <p>Total <span class="price" style="color:black"><input type="text" name="total_price" class="form-control" value="{{ $m->price }}"></span></p>
    </div>
  </div>
</div>

</body>
</html>


