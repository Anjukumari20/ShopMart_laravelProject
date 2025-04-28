@extends('layouts.app')

@section('content')
<!-- Contact Banner -->
<div class="container-fluid px-0 mb-5">
    <div class="hero-banner" style="height: 300px;">
        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80" class="card-img" alt="Contact Us Banner" style="height: 300px; object-position: center 30%;">
        <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
            <h1 class="card-title display-3 fw-bold">Contact Us</h1>
            <p class="card-text lead">We'd love to hear from you</p>
        </div>
    </div>
</div>

<div class="container">
    <!-- Contact Info Section -->
    <section class="py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3">Get In Touch</h2>
                <p class="lead text-muted mb-5">Have questions, suggestions, or feedback? We're here to help! Reach out to us using any of the methods below or fill out the contact form.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title mb-3">Our Location</h4>
                        <p class="card-text mb-0">123 E-Commerce St.</p>
                        <p class="card-text">Shopping City, SC 12345</p>
                        <a href="https://goo.gl/maps/1234" class="btn btn-outline-primary mt-3">
                            <i class="fas fa-directions me-2"></i>Get Directions
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title mb-3">Phone & Email</h4>
                        <p class="card-text mb-2"><i class="fas fa-phone me-2"></i>(123) 456-7890</p>
                        <p class="card-text"><i class="fas fa-envelope me-2"></i>info@ecommerce.com</p>
                        <a href="mailto:info@ecommerce.com" class="btn btn-outline-primary mt-3">
                            <i class="fas fa-envelope me-2"></i>Email Us
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-clock fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title mb-3">Business Hours</h4>
                        <p class="card-text mb-2"><strong>Monday - Friday:</strong></p>
                        <p class="card-text mb-3">9:00 AM - 5:00 PM</p>
                        <p class="card-text mb-2"><strong>Saturday - Sunday:</strong></p>
                        <p class="card-text">Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5 bg-light rounded shadow-sm mb-5">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="h-100 p-4 p-lg-5">
                    <h2 class="display-5 fw-bold mb-4">Send Us a Message</h2>
                    <p class="lead mb-4">Fill out the form and we'll get back to you as soon as possible.</p>

                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Customer Support</h5>
                                <p class="text-muted mb-0">24/7 dedicated support</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Fast Shipping</h5>
                                <p class="text-muted mb-0">Worldwide delivery</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Secure Payments</h5>
                                <p class="text-muted mb-0">100% secure checkout</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h5 class="mb-3">Connect With Us</h5>
                        <div class="d-flex">
                            <a href="#" class="btn btn-outline-primary rounded-circle me-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-circle me-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-circle me-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-circle me-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4 p-lg-5">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">Your Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary text-white"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="John Doe" required>
                                </div>
                                @error('name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">Your Email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary text-white"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="john@example.com" required>
                                </div>
                                @error('email')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label fw-bold">Your Message</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary text-white"><i class="fas fa-comment"></i></span>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" placeholder="How can we help you?" required>{{ old('message') }}</textarea>
                                </div>
                                @error('message')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="mb-5">
        <div class="card border-0 shadow-sm overflow-hidden">
            <div class="card-body p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986432970718!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1682661330452!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
                <p class="lead text-muted mb-5">Find answers to common questions about our services</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="fas fa-question-circle text-primary me-2"></i>How long does shipping take?</h5>
                        <p class="card-text">Standard shipping typically takes 3-5 business days within the continental US. International shipping can take 7-14 business days depending on the destination.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="fas fa-question-circle text-primary me-2"></i>What is your return policy?</h5>
                        <p class="card-text">We offer a 30-day return policy for most items. Products must be in their original condition with all packaging and tags intact.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="fas fa-question-circle text-primary me-2"></i>Do you ship internationally?</h5>
                        <p class="card-text">Yes, we ship to most countries worldwide. International shipping rates and delivery times vary by location.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title"><i class="fas fa-question-circle text-primary me-2"></i>How can I track my order?</h5>
                        <p class="card-text">Once your order ships, you'll receive a confirmation email with tracking information. You can also track your order in your account dashboard.</p>
                    </div>
                </div>
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

/* Additional hover effects for FAQ cards */
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}
.card:hover {
    background-color: rgba(13, 110, 253, 0.05);
    border-color: rgba(13, 110, 253, 0.3);
}
</style>
@endsection
