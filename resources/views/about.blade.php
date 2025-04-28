@extends('layouts.app')

@section('content')
<!-- About Banner -->
<div class="container-fluid px-0 mb-5">
    <div class="hero-banner" style="height: 300px;">
        <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1147&q=80" class="card-img" alt="About Us Banner" style="height: 300px; object-position: center 30%;">
        <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
            <h1 class="card-title display-3 fw-bold">About Us</h1>
            <p class="card-text lead">Get to know our story, mission, and values</p>
        </div>
    </div>
</div>

<div class="container">
    <!-- Our Story Section -->
    <section class="py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Our Team" class="img-fluid rounded shadow-lg" style="z-index: 1; position: relative;">
                    <div class="position-absolute bg-primary rounded p-3 text-white" style="bottom: -20px; right: -20px; z-index: 2;">
                        <h4 class="m-0">Since 2023</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Our Story</h2>
                <p class="lead text-muted mb-4">
                    Welcome to our E-Commerce Store, where quality meets affordability. Established in 2023, we've been dedicated to providing our customers with the best shopping experience possible.
                </p>
                <p class="mb-4">
                    Our journey began with a simple idea: to create an online marketplace where people could find high-quality products at reasonable prices. Since then, we've grown into a trusted destination for shoppers around the world.
                </p>
                <p>
                    What sets us apart is our commitment to customer satisfaction. We carefully select each product in our inventory to ensure it meets our high standards of quality and value.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="py-5 bg-light rounded shadow-sm">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-4">Our Mission</h2>
                <p class="lead mb-4">
                    Our mission is to make online shopping accessible, enjoyable, and reliable for everyone. We strive to offer a diverse range of products that cater to various needs and preferences, all while maintaining exceptional customer service.
                </p>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-globe fa-3x text-primary"></i>
                        </div>
                        <h5>Global Reach</h5>
                        <p class="text-muted">Serving customers worldwide</p>
                    </div>
                    <div class="col-md-4">
                        <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-truck fa-3x text-primary"></i>
                        </div>
                        <h5>Fast Delivery</h5>
                        <p class="text-muted">Quick and reliable shipping</p>
                    </div>
                    <div class="col-md-4">
                        <div class="rounded-circle bg-white shadow d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-headset fa-3x text-primary"></i>
                        </div>
                        <h5>24/7 Support</h5>
                        <p class="text-muted">Always here to help you</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-5">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="display-5 fw-bold mb-4">Our Values</h2>
                <p class="lead text-muted mb-5">The principles that guide everything we do</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body text-center p-5">
                        <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-star fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title mb-3">Quality</h4>
                        <p class="card-text">We never compromise on the quality of our products. Each item is carefully selected to ensure it meets our high standards.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body text-center p-5">
                        <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-handshake fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title mb-3">Integrity</h4>
                        <p class="card-text">We believe in honest business practices and transparent communication with our customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body text-center p-5">
                        <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title mb-3">Customer Focus</h4>
                        <p class="card-text">Our customers are at the heart of everything we do. We're committed to providing exceptional service and support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light rounded shadow-sm mb-5">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="display-5 fw-bold mb-4">Meet Our Team</h2>
                <p class="lead text-muted mb-5">The people behind our success</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm hover-card">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">John Doe</h5>
                        <p class="text-muted">CEO & Founder</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="text-primary mx-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary mx-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-primary mx-2"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm hover-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Jane Smith</h5>
                        <p class="text-muted">Marketing Director</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="text-primary mx-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary mx-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-primary mx-2"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm hover-card">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Mike Johnson</h5>
                        <p class="text-muted">Product Manager</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="text-primary mx-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary mx-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-primary mx-2"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm hover-card">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=761&q=80" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Sarah Williams</h5>
                        <p class="text-muted">Customer Support</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="text-primary mx-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary mx-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-primary mx-2"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5">
        <div class="card bg-primary text-white border-0 shadow">
            <div class="card-body p-5 text-center">
                <h2 class="card-title display-5 fw-bold mb-4">Ready to Start Shopping?</h2>
                <p class="card-text lead mb-4">Explore our wide range of products and find exactly what you're looking for.</p>
                <a href="{{ route('products.index') }}" class="btn btn-light btn-lg px-5 py-3">
                    <i class="fas fa-shopping-bag me-2"></i> Shop Now
                </a>
            </div>
        </div>
    </section>
</div>

<style>
.hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    background-color: rgba(13, 110, 253, 0.1) !important;
    border-color: rgba(13, 110, 253, 0.5) !important;
}
</style>
@endsection
