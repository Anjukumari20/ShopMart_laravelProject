@extends('layouts.app')

@section('content')
<style>
.product-card .card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    object-position: center;
}
.product-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    background-color: rgba(13, 110, 253, 0.05) !important;
}
</style>
<!-- Products Banner -->
<div class="container-fluid px-0 mb-4">
    <div class="hero-banner" style="height: 250px;">
        <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img" alt="Products Banner" style="height: 250px;">
        <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
            @if(request('category'))
                <h1 class="card-title display-4 fw-bold">{{ $categories->where('slug', request('category'))->first()->name }}</h1>
                <p class="card-text lead">Browse our selection of {{ $categories->where('slug', request('category'))->first()->name }}</p>
            @elseif(request('search'))
                <h1 class="card-title display-4 fw-bold">Search Results</h1>
                <p class="card-text lead">Results for: "{{ request('search') }}"</p>
            @else
                <h1 class="card-title display-4 fw-bold">All Products</h1>
                <p class="card-text lead">Discover our wide range of products</p>
            @endif
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- Sidebar with Categories and Search -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-search me-2"></i>Search Products</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.index') }}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search products..." value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-tags me-2"></i>Categories</h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ !request('category') ? 'active' : '' }}">
                            <span><i class="fas fa-layer-group me-2"></i>All Categories</span>
                            <span class="badge bg-primary rounded-pill">{{ $products->total() }}</span>
                        </a>
                        @foreach($categories as $category)
                            <a href="{{ route('products.index', ['category' => $category->slug]) }}"
                               class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ request('category') == $category->slug ? 'active' : '' }}">
                                <span>
                                    @if($category->slug == 'electronics')
                                        <i class="fas fa-mobile-alt me-2"></i>
                                    @elseif($category->slug == 'clothing')
                                        <i class="fas fa-tshirt me-2"></i>
                                    @elseif($category->slug == 'home-kitchen')
                                        <i class="fas fa-home me-2"></i>
                                    @elseif($category->slug == 'books')
                                        <i class="fas fa-book me-2"></i>
                                    @else
                                        <i class="fas fa-tag me-2"></i>
                                    @endif
                                    {{ $category->name }}
                                </span>
                                <span class="badge bg-primary rounded-pill">
                                    {{ $category->products->where('is_active', true)->count() }}
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Need Help?</h5>
                </div>
                <div class="card-body">
                    <p>Can't find what you're looking for? Contact our customer support team.</p>
                    <a href="{{ route('contact.index') }}" class="btn btn-outline-primary w-100">
                        <i class="fas fa-envelope me-2"></i>Contact Us
                    </a>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="col-lg-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <p class="text-muted mb-0">Showing {{ $products->count() }} of {{ $products->total() }} products</p>
                </div>
                <div class="d-flex align-items-center">
                    <span class="me-2">Sort by:</span>
                    <form id="sortForm" action="{{ route('products.index') }}" method="GET" class="mb-0">
                        @if(request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if(request('search'))
                            <input type="hidden" name="search" value="{{ request('search') }}">
                        @endif
                        <select id="sortSelect" name="sort" class="form-select form-select-sm" style="width: auto;" onchange="document.getElementById('sortForm').submit()">
                            <option value="featured" {{ $sort == 'featured' ? 'selected' : '' }}>Featured</option>
                            <option value="price_low_high" {{ $sort == 'price_low_high' ? 'selected' : '' }}>Price: Low to High</option>
                            <option value="price_high_low" {{ $sort == 'price_high_low' ? 'selected' : '' }}>Price: High to Low</option>
                            <option value="newest" {{ $sort == 'newest' ? 'selected' : '' }}>Newest</option>
                        </select>
                    </form>
                </div>
            </div>

            <div class="row">
                @forelse($products as $product)
                    <div class="col-md-4 mb-4">
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
                            @elseif(Str::contains($product->name, 'Bedding'))
                                <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="{{ $product->name }}">
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
                                    <span class="price">${{ number_format($product->price, 2) }}</span>
                                    <div>
                                        <a href="{{ route('products.show', $product->slug) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye me-1"></i> View
                                        </a>
                                        @if($product->quantity > 0)
                                            <form action="{{ route('cart.add') }}" method="POST" class="d-inline">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <i class="fas fa-cart-plus me-1"></i> Add
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i> No products found.
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    {{ $products->appends(['sort' => request('sort'), 'category' => request('category'), 'search' => request('search')])->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
