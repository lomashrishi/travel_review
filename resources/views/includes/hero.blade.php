<div class=" text-white container-fluid hero-div" style="background-image: url('{{ asset('client/img/lockscreen-bg.jpg') }}');  background-size: cover; ">
    <div class="row py-4 d-flex justify-content-center">
        <div class="col-md-6 mt-3">
            <div class="input-group">
                <input type="text" class="form-control fw-bold fs-5" placeholder="Search For Your Favorite Airlines...">
                <button class="btn btn-light"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>

    <div class="row py-2">
        <!-- Left Section -->
        <div class="col-lg-7 d-flex ">
            <div class="px-4">
                <h1 class="display-4 fw-bold text-capitalize">Top Airlines Company</h1>
                <p class="lead text-justify mt-5">
                    "Explore the world’s leading airlines known for their exceptional service, comfort, and global
                    connectivity. Whether you’re traveling for business or leisure, these top airlines offer the best
                    flying experience. Explore the world’s leading airlines known for their exceptional service,
                    comfort, and global
                    connectivity. Whether you’re traveling for business or leisure, these top airlines offer the best
                    flying experience.""
                </p>
                <div class="text-center my-5">

                    <a href="{{ route('login') }}"
                        class="bg-light text-decoration-none rounded py-1 fs-4 text-black fw-bold px-3">Share Your
                        Experience</a>

                </div>
            </div>
        </div>

        <!-- Right Section -->
        <div class="col-lg-5">
            <div class=" card p-3 bg-transparent border-0">
                <!-- Repeat for each airline -->
                <div class="row align-items-center mb-3 py-1 border-white border rounded"
                    style="background-color: #CFDEEC;">
                    <div class="col-2">
                        <img src="{{ asset('client/img/airplane.jpg') }}" alt="Aer Lingus Logo"
                            class="img-fluid rounded-circle">
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">Aer Lingus</h6>
                    </div>
                    <div class="col-4 text-end rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <div class="row  align-items-center mb-3 py-1 border-white border rounded"
                    style="background-color: #CFDEEC;">
                    <div class="col-2">
                        <img src="{{ asset('client/img/airplane.jpg') }}" alt="Air Canada Logo"
                            class="img-fluid rounded-circle">
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">Air Canada</h6>
                    </div>
                    <div class="col-4 text-end rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="row align-items-center mb-3 py-1 border-white border rounded"
                    style="background-color: #CFDEEC;">
                    <div class="col-2">
                        <img src="{{ asset('client/img/airplane.jpg') }}" alt="Air France Logo"
                            class="img-fluid rounded-circle">
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">Air France</h6>
                    </div>
                    <div class="col-4 text-end rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="row align-items-center mb-3 py-1 border-white border rounded"
                    style="background-color: #CFDEEC;">
                    <div class="col-2">
                        <img src="{{ asset('client/img/airplane.jpg') }}" alt="Air Tahiti Nui Logo"
                            class="img-fluid rounded-circle">
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">Air Tahiti Nui</h6>
                    </div>
                    <div class="col-4 text-end rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <div class="row align-items-center mb-3 py-1 border-white border rounded"
                    style="background-color: #CFDEEC;">
                    <div class="col-2">
                        <img src="{{ asset('client/img/airplane.jpg') }}" alt="Alaska Airlines Logo"
                            class="img-fluid rounded-circle">
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">Alaska Airlines</h6>
                    </div>
                    <div class="col-4 text-end rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-alt"></i>
                    </div>
                </div>
                {{-- <div class="row align-items-center mb-3 py-1 border-white border rounded" style="background-color: #CFDEEC;">
                    <div class="col-2">
                        <img src="{{asset('client/img/airplane.jpg')}}" alt="ANA Logo" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">All Nippon Airways (ANA)</h6>
                    </div>
                    <div class="col-4 text-end rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <div class="row align-items-center mb-3 py-1 border-white border rounded" style="background-color: #CFDEEC;">
                    <div class="col-2">
                        <img src="{{asset('client/img/airplane.jpg')}}" alt="American Airlines Logo" class="img-fluid rounded-circle rounded">
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">American Airlines</h6>
                    </div>
                    <div class="col-4 text-end rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
