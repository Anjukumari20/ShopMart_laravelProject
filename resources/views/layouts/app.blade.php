<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-Commerce Store') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                    <i class="fas fa-shopping-bag me-2 text-primary"></i>{{ config('app.name', 'ShopMart') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">{{ __('Products') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">{{ __('Contact') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('custom.register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cart.index') }}">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('orders.index') }}">
                                    <i class="fa fa-list"></i> My Orders
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->email === 'admin@example.com')
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                            {{ __('Admin Dashboard') }}
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (session('success'))
                <div class="container">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="container">
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                </div>
            @endif

            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer-section mt-5">

            <!-- Main Footer -->
            <div class="main-footer py-5 bg-dark text-white">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <h4 class="mb-4 fw-bold"><i class="fas fa-shopping-bag me-2 text-primary"></i>{{ config('app.name', 'ShopMart') }}</h4>
                                <p class="mb-4">Your one-stop destination for premium products at competitive prices. We offer a wide range of high-quality items to meet all your shopping needs.</p>
                                <div class="social-links">
                                    <a href="#" class="social-icon me-2" aria-label="Facebook"><i class="fab fa-facebook-f fa-fw"></i></a>
                                    <a href="#" class="social-icon me-2" aria-label="Twitter"><i class="fab fa-twitter fa-fw"></i></a>
                                    <a href="#" class="social-icon me-2" aria-label="Instagram"><i class="fab fa-instagram fa-fw"></i></a>
                                    <a href="#" class="social-icon me-2" aria-label="Pinterest"><i class="fab fa-pinterest fa-fw"></i></a>
                                    <a href="#" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube fa-fw"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer-widget">
                                <h5 class="mb-4 fw-bold footer-title">Shop</h5>
                                <ul class="footer-links list-unstyled">
                                    <li class="mb-2"><a href="{{ route('products.index') }}">All Products</a></li>
                                    <li class="mb-2"><a href="{{ route('products.index', ['category' => 'electronics']) }}">Electronics</a></li>
                                    <li class="mb-2"><a href="{{ route('products.index', ['category' => 'clothing']) }}">Clothing</a></li>
                                    <li class="mb-2"><a href="{{ route('products.index', ['category' => 'home-kitchen']) }}">Home & Kitchen</a></li>
                                    <li class="mb-2"><a href="{{ route('products.index', ['category' => 'books']) }}">Books</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer-widget">
                                <h5 class="mb-4 fw-bold footer-title">Quick Links</h5>
                                <ul class="footer-links list-unstyled">
                                    <li class="mb-2"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="mb-2"><a href="{{ route('about') }}">About Us</a></li>
                                    <li class="mb-2"><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                    <li class="mb-2"><a href="#">FAQ</a></li>
                                    <li class="mb-2"><a href="#">Privacy Policy</a></li>
                                    <li class="mb-2"><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <h5 class="mb-4 fw-bold footer-title">Contact Us</h5>
                                <div class="contact-info">
                                    <div class="d-flex mb-3">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-map-marker-alt text-primary"></i>
                                        </div>
                                        <div class="text">
                                            <p class="mb-0">123 E-Commerce St., Shopping City, SC 12345</p>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-phone-alt text-primary"></i>
                                        </div>
                                        <div class="text">
                                            <p class="mb-0">(123) 456-7890</p>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-envelope text-primary"></i>
                                        </div>
                                        <div class="text">
                                            <p class="mb-0">info@shopmart.com</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="icon-box me-3">
                                            <i class="fas fa-clock text-primary"></i>
                                        </div>
                                        <div class="text">
                                            <p class="mb-0">Mon-Fri: 9:00 AM - 5:00 PM</p>
                                            <p class="mb-0">Sat-Sun: Closed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="payment-methods py-4 bg-dark bg-opacity-90 text-white border-top border-secondary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="payment-icons d-flex flex-wrap">
                                <span class="me-3 mb-2"><i class="fab fa-cc-visa fa-2x"></i></span>
                                <span class="me-3 mb-2"><i class="fab fa-cc-mastercard fa-2x"></i></span>
                                <span class="me-3 mb-2"><i class="fab fa-cc-amex fa-2x"></i></span>
                                <span class="me-3 mb-2"><i class="fab fa-cc-paypal fa-2x"></i></span>
                                <span class="me-3 mb-2"><i class="fab fa-cc-apple-pay fa-2x"></i></span>
                                <span class="mb-2"><i class="fab fa-cc-discover fa-2x"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-end mt-3 mt-md-0">
                            <p class="mb-0">&copy; {{ date('Y') }} {{ config('app.name', 'ShopMart') }}. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <style>
            /* Footer Styles */
            .footer-section {
                font-family: 'Nunito', sans-serif;
            }

            .newsletter-section {
                background-image: linear-gradient(45deg, rgba(13, 110, 253, 0.05) 25%, transparent 25%, transparent 50%, rgba(13, 110, 253, 0.05) 50%, rgba(13, 110, 253, 0.05) 75%, transparent 75%, transparent);
                background-size: 20px 20px;
            }

            .footer-title {
                position: relative;
                padding-bottom: 10px;
            }

            .footer-title:after {
                content: '';
                position: absolute;
                left: 0;
                bottom: 0;
                width: 50px;
                height: 2px;
                background-color: var(--bs-primary);
            }

            .footer-links a {
                color: #ced4da;
                text-decoration: none;
                transition: all 0.3s ease;
                display: inline-block;
            }

            .footer-links a:hover {
                color: var(--bs-primary);
                transform: translateX(5px);
            }

            .social-icon {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 36px;
                height: 36px;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.1);
                color: #fff;
                text-decoration: none;
                transition: all 0.3s ease;
            }

            .social-icon:hover {
                background-color: var(--bs-primary);
                color: #fff;
                transform: translateY(-3px);
            }

            .icon-box {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-color: rgba(13, 110, 253, 0.1);
            }

            .payment-icons span {
                opacity: 0.7;
                transition: all 0.3s ease;
            }

            .payment-icons span:hover {
                opacity: 1;
            }

            @media (max-width: 767.98px) {
                .footer-widget {
                    margin-bottom: 30px;
                }
            }
        </style>
    </div>
</body>
</html>
