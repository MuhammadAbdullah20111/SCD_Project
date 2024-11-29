@extends('layouts.master')

@section('title', 'About Us')

@section('content')
 <!-- Company Story Section -->
    <section class="company-story py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('pic1.jpg') }}" alt="Founder" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h3>Our Story</h3>
                    <p>Founded in 2010, we have always been passionate about creating products that improve lives.</p>
                    <ul class="timeline">
                        <li><i class="fas fa-calendar-alt"></i> 2010: Founded</li>
                        <li><i class="fas fa-bolt"></i> 2015: Reached 1000 customers</li>
                        <li><i class="fas fa-rocket"></i> 2020: Launched our flagship product</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Mission</h3>
                    <p><i class="fas fa-bullseye"></i> To empower businesses with innovative solutions.</p>
                </div>
                <div class="col-md-6">
                    <h3>Our Vision</h3>
                    <p><i class="fas fa-eye"></i> To be a global leader in technology solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team Section -->
    <section class="meet-team py-5">
        <div class="container">
            <h3 class="text-center">Meet the Team</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card team-card">
                        <img src="https://picsum.photos/seed/VYoNKOl9cnSgvvEDwXzkK/512" class="card-img-top" alt="Team Member 1">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">CEO</p>
                            <p class="quote">"Passionate about tech innovation."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card team-card">
                        <img src="https://picsum.photos/seed/qEMxWAosKupiJ0wv2w4bg/512" class="card-img-top" alt="Team Member 2">
                        <div class="card-body">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">CTO</p>
                            <p class="quote">"Building the future, one line of code at a time."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card team-card">
                        <img src="https://picsum.photos/seed/7xLI5cXKrdgfhwD17OhxT/512" class="card-img-top" alt="Team Member 3">
                        <div class="card-body">
                            <h5 class="card-title">Alice Brown</h5>
                            <p class="card-text">COO</p>
                            <p class="quote">"Efficiency drives success."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="core-values bg-light py-5">
        <div class="container text-center">
            <h3>Core Values</h3>
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-lightbulb"></i>
                    <h5>Innovation</h5>
                    <p>We strive to be at the forefront of technological advancements.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-users"></i>
                    <h5>Customer-First</h5>
                    <p>Your satisfaction is our top priority.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-leaf"></i>
                    <h5>Sustainability</h5>
                    <p>We are committed to environmentally friendly practices.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
