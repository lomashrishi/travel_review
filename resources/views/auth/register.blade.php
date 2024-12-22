@extends('includes.layout')

@section('title', 'Registration || Travel Remarks')

@section('content')
  <div class="container d-flex justify-content-center align-items-center vh-100 ">
    <div class="row w-90 shadow rounded overflow-hidden my-2">
      <!-- Left Image Section -->
      <div class="col-md-6 bg-white p-0">
        <img src="{{asset('assets/images/auth/airplane.jpg')}}" alt="Airplane" class="shadow rounded rounded-end-0  h-100 w-100">
      </div>
      <!-- Right Form Section -->
      <div class="col-md-6 bg-white p-4">
        <h2 class="text-center text-black fw-bold">Registration</h2>
        <form  action="{{route('register-submit')}}" method="POST">
            @csrf
          <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name <span class="fw-bold text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-user"></i></span>
              <input type="text" id="name" name="first-name" class="form-control fw-bold" placeholder="Enter Name" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="last-name" class="form-label fw-bold">Last Name</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-user"></i></span>
              <input type="text" id="last-name" name="last-name" class="form-control fw-bold " placeholder="Enter Last Name">
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email <span class="fw-bold text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              <input type="email" id="email" name="email" class="form-control fw-bold" placeholder="example@gmail.com" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password <span class="fw-bold text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-lock"></i></span>
              <input type="password" id="password" name="password" class="form-control fw-bold " placeholder="Enter Password" required>
              <span class="input-group-text"><i class="fa fa-eye"></i></span>
            </div>
          </div>
          <div class="mb-3">
            <label for="mobile" class="form-label fw-bold">Mobile <span class="fw-bold text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa fa-mobile"></i></span>
              <input type="text" id="mobile"  name="mobile" class="form-control fw-bold  " placeholder="Enter mobile number" required>
            </div>
          </div>
          <div class="mb-3 form-check d-flex justify-content-between">
            <div>
              <input type="checkbox" class="form-check-input fw-bold border-dark " name="remember-me" id="remember-me" required>
              <label class="form-check-label fw-bold" for="remember-me">I Accepted <span class="fw-bold text-danger">*</span></label><a class="text-decoration-none ms-2 fs-tiny fw-bold" href="http://"><small>Privacy Policy?</small></a>
            </div>
            {{-- <a href="#" class="text-decoration-none fw-bold">Forgot Password?</a> --}}
          </div>
          <button type="submit" class="btn btn-dark fw-bold w-100 fs-5">Register</button>
          <div class="text-center mt-3">
            <span class="fw-bold">Already have an account? <a href="{{ route('login') }}" class="text-primary text-decoration-none">Login</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
