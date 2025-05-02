@extends('layouts.app')

@section('content')
<!-- Hero Banner -->
<div class="container-fluid px-0">
    <div class="hero-banner">
        <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img" alt="Banner">
        <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
            <h1 class="card-title display-4 fw-bold">Welcome to Our E-Commerce Store</h1>
            <p class="card-text lead">Discover amazing products at unbeatable prices.</p>
            <div class="d-flex justify-content-center">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg px-5 py-3">
                    <i class="fas fa-shopping-bag me-2"></i> Shop Now
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.category-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}
.category-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    background-color: rgba(13, 110, 253, 0.1) !important;
    border-color: rgba(13, 110, 253, 0.5) !important;
}
.product-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}
.category-card .card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    object-position: center;
}
.product-card .card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    object-position: center;
}
</style>

<!-- Shop by Category Section -->
<section class="shop-by-category py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-heading display-5 fw-bold">Shop by Category</h2>
                <p class="lead text-muted">Browse our wide selection of products by category</p>
            </div>
        </div>

        <div class="row">
            @forelse($categories as $category)
                <div class="col-md-3 mb-4">
                    <div class="category-card card h-100">
                        @if($category->slug == 'electronics')
                            <img src="https://images.unsplash.com/photo-1498049794561-7780e7231661?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $category->name }}">
                        @elseif($category->slug == 'clothing')
                            <img src="https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $category->name }}">
                        @elseif($category->slug == 'home-kitchen')
                            <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1168&q=80" class="card-img-top" alt="{{ $category->name }}">
                        @elseif($category->slug == 'books')
                            <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $category->name }}">
                        @else
                            <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $category->name }}">
                        @endif
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">{{ Str::limit($category->description, 80) }}</p>
                            <a href="{{ route('products.index', ['category' => $category->slug]) }}" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-right me-2"></i>View Products
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        No categories available.
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="featured-products py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="section-heading display-5 fw-bold">Featured Products</h2>
                <p class="lead text-muted">Check out our most popular items</p>
            </div>
        </div>

        <div class="row">
            @forelse($featuredProducts as $product)
                <div class="col-md-3 mb-4">
                    <div class="product-card card h-100">
                        @if(Str::contains($product->name, 'Smartphone'))
                            <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1227&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Laptop'))
                            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Earbuds'))
                            <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Watch'))
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1099&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Shirt'))
                            <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Dress'))
                            <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Shoes'))
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Jacket'))
                            <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Coffee'))
                            <img src="https://images.unsplash.com/photo-1564466809058-bf4114d55352?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1333&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Blender'))
                            <img src="https://images.unsplash.com/photo-1622480916113-9000ac49b79d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Kitchen'))
                            <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1168&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Book'))
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @elseif(Str::contains($product->name, 'Novel'))
                            <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="card-img-top" alt="{{ $product->name }}">
                        @endif
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary">{{ $product->category->name }}</span>
                                @if($product->quantity > 0)
                                    <span class="badge bg-success">In Stock</span>
                                @else
                                    <span class="badge bg-danger">Out of Stock</span>
                                @endif
                            </div>
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 60) }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price">₹{{ number_format($product->price, 2) }}</span>
                                <a href="{{ route('products.show', $product->slug) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye me-1"></i> View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        No featured products available.
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-primary text-white">
                    <div class="card-body p-5 text-center">
                        <h2 class="card-title mb-4">Ready to Start Shopping?</h2>
                        <p class="card-text lead mb-4">Browse our full catalog of products and find exactly what you're looking for.</p>
                        <a href="{{ route('products.index') }}" class="btn btn-light btn-lg px-5">
                            <i class="fas fa-shopping-bag me-2"></i> Shop All Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
