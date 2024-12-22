<div class="container-fluid py-5" style="background-color: #CFDEEC;">
    <h2 class="text-center mb-5">What Our Customers Say About Us</h2>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active rounded shadow text-dark"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" class="rounded shadow text-dark"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" class="rounded shadow text-dark"
                aria-label="Slide 3"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 text-center py-5 px-3 bg-white rounded shadow d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('client/img/man.jpg') }}" alt="Customer 1" class="rounded-circle img-fluid" width="60px" height="60px">
                            <div class="ms-3">
                                <h5 class="fw-bold">John Doe</h5>
                                <p class="text-muted">"The quality and innovation of their services exceeded our expectations. Their expertise has been invaluable to our projects."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 text-center py-5 px-3 bg-white rounded shadow d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('client/img/man.jpg') }}" alt="Customer 2" class="rounded-circle img-fluid" width="60px" height="60px">
                            <div class="ms-3">
                                <h5 class="fw-bold">Jane Smith</h5>
                                <p class="text-muted">"Their team's dedication and attention to detail really stood out. We highly recommend their services."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 text-center py-5 px-3 bg-white rounded shadow d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('client/img/man.jpg') }}" alt="Customer 3" class="rounded-circle img-fluid" width="60px" height="60px">
                            <div class="ms-3">
                                <h5 class="fw-bold">Mike Johnson</h5>
                                <p class="text-muted">"A truly professional experience! Their solutions helped us achieve our goals efficiently and effectively."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
