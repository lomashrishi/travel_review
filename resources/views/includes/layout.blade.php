<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <title>@yield('title', 'Default Title')</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add this in the <head> section to include Flaticon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/font@1.0.0/css/flaticon.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    {{-- Css By Lomash Rishi --}}
    <link rel="stylesheet" href="{{ asset('client/style.css') }}" />

</head>

<body style="background-color: #CFDEEC;">

    <!-- Layout wrapper -->


    <!-- Navbar -->
    @include('includes.navbar')
       <!-- Hero -->
       @if(Route::is('home'))
       @include('includes.hero')
   @endif
    <!-- Content -->
    @yield('content')
    <!-- Footer -->
    @include('includes.footer')


<!-- Scripts -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
 <!-- Custom JS -->
 <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
