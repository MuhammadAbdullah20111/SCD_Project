@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
    <!-- Hero Section -->
    <header class="hero" id="home">
        <div class="hero-overlay">
            <div class="container text-center">
                <h1 class="display-4">Welcome to Your Business Name</h1>
                <p class="lead">Your One-Stop Solution for Quality Products and Services.</p>
                <a href="{{ url('products') }}" class="btn btn-primary btn-lg">Explore Now</a>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="features py-5 bg-light" id="products">
        <div class="container text-center">
            <h2 class="mb-4">Our Core Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="fas fa-star fa-3x mb-3"></i>
                            <h5 class="card-title">High-Quality Products</h5>
                            <p class="card-text">Top quality products that meet your needs.</p>
                            <a href="{{ url('products') }}" class="btn btn-secondary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="fas fa-headset fa-3x mb-3"></i>
                            <h5 class="card-title">24/7 Customer Support</h5>
                            <p class="card-text">We're here to help anytime you need us.</p>
                            <a href="{{ url('contact') }}" class="btn btn-secondary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="fas fa-dollar-sign fa-3x mb-3"></i>
                            <h5 class="card-title">Affordable Prices</h5>
                            <p class="card-text">Competitive pricing without compromising on quality.</p>
                            <a href="{{ url('products') }}" class="btn btn-secondary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5" id="about">
        <div class="container">
            <h2 class="text-center mb-4">What Our Clients Say</h2>
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <img src="{{ asset('pic1.jpg') }}" class="rounded-circle mb-3" alt="Client 1" width="500">
                        <blockquote class="blockquote">
                            <p class="mb-0">Amazing service! Highly recommend.</p>
                            <footer class="blockquote-footer">Client 1</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item text-center">
                        <img src="{{ asset('pic2.jpg') }}" class="rounded-circle mb-3" alt="Client 2" width="500">
                        <blockquote class="blockquote">
                            <p class="mb-0">Quality products at great prices!</p>
                            <footer class="blockquote-footer">Client 2</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item text-center">
                        <img src="{{ asset('pic3.jpg') }}" class="rounded-circle mb-3" alt="Client 3" width="500">
                        <blockquote class="blockquote">
                            <p class="mb-0">Fantastic customer support!</p>
                            <footer class="blockquote-footer">Client 3</footer>
                        </blockquote>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection
