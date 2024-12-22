<nav class="navbar navbar-expand-lg" style="background-color: #4a6ea8;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-white fw-bold" href="{{route('home')}}">LOGO</a>

        <!-- Toggler for Mobile View -->
        <button class="navbar-toggler bg-white " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  "></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white fw-bold" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Services</a>
                </li>
            </ul>
            <span>

                <!-- Login Button -->
                @if(!request()->is('login'))
                <a href="{{ route('login') }}" class="bg-light text-decoration-none rounded py-1 text-black fw-bold px-3">Login</a>
                @endif
                <!-- Register Button -->
                @if(Route::is('login'))
                <a href="{{route('user-register')}}" class="bg-light text-decoration-none rounded py-1 text-black fw-bold px-3">Register</a>
                @endif
            </span>

        </div>
    </div>
</nav>
