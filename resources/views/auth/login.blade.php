@extends('includes.layout')

@section('title', 'Login Page || Travel Remarks')

@section('content')

  <div class="container d-flex justify-content-center align-items-center vh-100 ">
    <div class="row w-90 shadow rounded overflow-hidden my-2 border border-3 border-white">
      <!--Left  Form Section -->
      <div class="col-md-6 bg-white p-4">
        <h2 class="text-center text-black fw-bold mb-0">Login</h2>
        <div class="text-center m-0 p-0">
        <h6><small class=" fw-bold mt-0">Wel Come Back !</small></h6>
        </div>
        <form method="POST" action="{{ route('login-submit') }}">
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label fw-bold">Email/Mobile <span class="fw-bold text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              <input type="username" id="username" name="username" class="form-control fw-bold p-3 border-1 border-dark" placeholder="Email/Mobile" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password <span class="fw-bold text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-lock"></i></span>
              <input type="password" id="password" name="password" class="form-control fw-bold p-3 border-1 border-dark " placeholder="Enter Password" required>
              <span class="input-group-text"><i class="fa fa-eye"></i></span>
            </div>
          </div>
          <div class="mb-3 form-check d-flex justify-content-between">
            <div>
              <input type="checkbox" class="form-check-input fw-bold border-dark" id="remember-me" name="remember">
              <label class="form-check-label fw-bold" for="remember-me">Remember me</label>
            </div>
            <a href="{{ route('forgot-pass') }}" class="text-decoration-none fw-bold">Forgot Password?</a>
          </div>
          <button type="submit" class="btn btn-dark fw-bold w-100 fs-4 ">Login</button>
          <div class="text-center mt-3">
            <span class="fw-bold">Don't have an account? <a href="{{ route('user-register') }}" class="text-primary text-decoration-none">Register</a></span>
          </div>
        </form>
      </div>
   <!-- Right Image Section -->
   <div class="col-md-6 bg-white p-0">
    <img src="{{ asset('assets/images/auth/airplane.jpg') }}" alt="Airplane" class="shadow rounded rounded-start-0 h-100 w-100">
  </div>

    </div>
  </div>
@endsection
