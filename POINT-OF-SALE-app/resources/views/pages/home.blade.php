@extends('layout.app')

@section('content')
    <nav class="navbar sticky-top shadow-sm navbar-expand-lg navbar-light py-2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{ asset('/images/logo.png') }}" alt="" width="96px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header01"
                aria-controls="header01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="header01">
                <ul class="navbar-nav ms-auto mt-3 mt-lg-0 mb-3 mb-lg-0 me-4">
                    <li class="nav-item me-4"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item me-4"><a class="nav-link" href="#">Company</a></li>
                    <li class="nav-item me-4"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                </ul>
                <div><a class="btn mt-3 bg-gradient-primary" href="{{ url('/userLogin') }}">Start Sale</a></div>
            </div>
        </div>
    </nav>


    <section class="pb-5">
        <div class="container pt-2">
            <div class="row align-items-center mb-5">
                <div class="col-12 col-md-10 col-lg-5 mb-5 mb-lg-0">
                    <h2 class=" fw-bold mb-3">Elevate Your Sales Game with Our Powerful POS Application! </h2>
                    <p class="lead text-muted mb-4">Discover streamlined transactions, real-time inventory management, and
                        actionable insights in one intuitive POS app.</p>
                    <div class="d-flex flex-wrap"><a class="btn bg-gradient-primary me-2 mb-2 mb-sm-0"
                            href="{{ url('/userLogin') }}">Start Sale</a>
                        <a class="btn bg-gradient-primary mb-2 mb-sm-0" href="{{ url('/userLogin') }}">Login</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <img class="img-fluid" src="{{ asset('/images/hero.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center">
                    <span class="text-muted">Happy Clients</span>
                    <p class="lead text-muted">Spotlight on Our Exceptional Client Success</p>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 p-3">
                    <div class="card px-0 text-center">
                        <img class=" card-img-top mb-3 w-100" src="{{ asset('images/client1.jpeg') }}" alt="">
                        <h5>Jakaria Kabir</h5>
                        <p class="text-muted mb-4">CEO &amp; Founder</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3">
                    <div class="card px-0 text-center">
                        <img class=" card-img-top mb-3 w-100" src="{{ asset('images/client2.jpg') }}" alt="">
                        <h5>Danny Bailey</h5>
                        <p class="text-muted mb-4">CEO &amp; Founder</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3">
                    <div class="card px-0 text-center">
                        <img class=" card-img-top mb-3 w-100" src="{{ asset('images/client3.jpg') }}" alt="">
                        <h5>Jon Dow</h5>
                        <p class="text-muted mb-4">CEO &amp; Founder</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3">
                    <div class="card px-0 text-center">
                        <img class=" card-img-top mb-3 w-100" src="{{ asset('images/client4.jpg') }}" alt="">
                        <h5>Danny Smith</h5>
                        <p class="text-muted mb-4">CEO &amp; Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br />

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-5">Reach Out to Us: Let's Connect and Explore Opportunities Together</h2>
                    <h4 class="fw-bold">Address</h4>
                    <p class="text-muted mb-5">East Brahmondi, Narsingdi, Dhaka</p>
                    <h4 class="fw-bold">Contact Us</h4>
                    <p class="text-muted mb-1">jkp.jakaria@gmail.com</p>
                    <p class="text-muted mb-0">01642527454</p>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <form action="#">
                        <input class="form-control mb-3" type="text" placeholder="Name">
                        <input class="form-control mb-3" type="email" placeholder="E-mail">
                        <textarea class="form-control mb-3" name="message" cols="30" rows="10" placeholder="Your Message..."></textarea>
                        <button class="btn bg-gradient-primary w-100">Action</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5 bg-light">
        <div class="container text-center pb-5 border-bottom">
            <a class="d-inline-block mx-auto mb-4" href="#">
                <img class="img-fluid"src="{{ asset('/images/logo.png') }}" alt="" width="96px">
            </a>
            <ul class="d-flex flex-wrap justify-content-center align-items-center list-unstyled mb-4">
                <li><a class="link-secondary me-4" href="#">About</a></li>
                <li><a class="link-secondary me-4" href="#">Services</a></li>
                <li><a class="link-secondary me-4" href="#">Company</a></li>
                <li><a class="link-secondary" href="#">Testimonials</a></li>
            </ul>
            <div>
                <a class="d-inline-block me-4" href="https://www.facebook.com/jakaria.kabir.35">
                    <img src="{{ asset('/images/facebook.svg') }}">
                </a>
                <a class="d-inline-block me-4" href="#">
                    <img src="{{ asset('/images/twitter.svg') }}">
                </a>
                <a class="d-inline-block me-4"
                    href="https://github.com/Jkp-jakaria?fbclid=IwAR2ZdgTsFomZA28wiindSd03Bk5kYCC6yggYD4ne87f32xDwLbpjm0XIGko">
                    <img src="{{ asset('/images/github.svg') }}">
                </a>
                <a class="d-inline-block me-4" href="https://www.instagram.com/jakaria.kabir/">
                    <img src="{{ asset('/images/instagram.svg') }}">
                </a>
                <a class="d-inline-block"
                    href="https://www.linkedin.com/in/Jkp-jakaria/?fbclid=IwAR01Y0ef_ptaI1ZGeZKDhaWW9lLNSKi7M_2v8S5x2HLUbUPt1IC3-I07BMM">
                    <img src="{{ asset('/images/linkedin.svg') }}">
                </a>
            </div>
        </div>
        <div class="mb-5"></div>
        <div class="container">
            <p class="text-center">All rights reserved © JAKARIA KABIR 2023-2024</p>
        </div>
    </footer>
@endsection
