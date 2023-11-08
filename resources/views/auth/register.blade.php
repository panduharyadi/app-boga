@extends('layout.auth.auth')

@section('title', 'Login')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputtext1" aria-describedby="textHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">
        </div>
            <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
        <div class="d-flex align-items-center justify-content-center">
            <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
            <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Sign In</a>
        </div>
    </form>
@endsection