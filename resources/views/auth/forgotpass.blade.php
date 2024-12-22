@extends('includes.layout')

@section('title', 'Forgot Password || Travel Remarks')

@section('content')
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100 shadow rounded overflow-hidden  border border-3 border-white">

        <!-- Left Image Section -->
   <div class="col-md-4 bg-white p-0">
    <img src="{{ asset('assets/images/auth/airplane.jpg') }}" alt="Airplane" class="shadow rounded rounded-end-0 h-100 w-100">
  </div>
        <!-- Right Form Section -->
      <div class="col-md-8 bg-white p-4">
        <h2 class="text-center text-black fw-bold mb-0">Forgot Password</h2>
        <div class="text-center m-0 p-0">
          <h6><small class="fw-bold mt-0">Reset Your Password</small></h6>
        </div>
        <form method="POST" action="{{ route('forgot-pass-submit') }}">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email <span class="fw-bold text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              <input type="email" id="email" name="email" class="form-control fw-bold p-3 border-1 border-dark" placeholder="Enter your registered email" required>
            </div>
          </div>
          <button type="submit" class="btn btn-dark fw-bold w-100 fs-4">Send Reset Link</button>
          <div class="text-center mt-3">
            <span class="fw-bold"><a href="{{ route('login') }}" class="text-primary text-decoration-none">Back to Login</a></span>
          </div>
        </form>
      </div>

    </div>
  </div>

  @endsection
