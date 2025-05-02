@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h1>Shopping Cart</h1>
            <hr>
        </div>
    </div>

    @if($cartItems->count() > 0)
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Cart Items ({{ $cartItems->count() }})</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartItems as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if(Str::contains($item->product->name, 'Smartphone'))
                                                        <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1227&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Laptop'))
                                                        <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Earbuds'))
                                                        <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Watch'))
                                                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1099&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Shirt'))
                                                        <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Dress'))
                                                        <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Shoes'))
                                                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Jacket'))
                                                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Coffee'))
                                                        <img src="https://images.unsplash.com/photo-1564466809058-bf4114d55352?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1333&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Blender'))
                                                        <img src="https://images.unsplash.com/photo-1622480916113-9000ac49b79d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Kitchen'))
                                                        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1168&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @elseif(Str::contains($item->product->name, 'Book'))
                                                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @else
                                                        <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="me-3" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->product->name }}">
                                                    @endif
                                                    <div>
                                                        <h6 class="mb-0">{{ $item->product->name }}</h6>
                                                        <small class="text-muted">{{ $item->product->category->name }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>₹{{ number_format($item->product->price, 2) }}</td>
                                            <td>
                                                <form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-flex align-items-center">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="number" name="quantity" class="form-control form-control-sm" style="width: 70px;" value="{{ $item->quantity }}" min="1" max="{{ $item->product->quantity }}">
                                                    <button type="submit" class="btn btn-sm btn-outline-primary ms-2">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>₹{{ number_format($item->product->price * $item->quantity, 2) }}</td>
                                            <td>
                                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('products.index') }}" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left me-2"></i> Continue Shopping
                            </a>
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="fas fa-trash me-2"></i> Clear Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Order Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <span>Subtotal:</span>
                            <span>₹{{ number_format($total, 2) }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Shipping:</span>
                            <span>Free</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <strong>Total:</strong>
                            <strong>₹{{ number_format($total, 2) }}</strong>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="{{ route('cart.checkout') }}" class="btn btn-primary">
                                Proceed to Checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info">
                    <h4 class="alert-heading">Your cart is empty!</h4>
                    <p>Looks like you haven't added any products to your cart yet.</p>
                    <hr>
                    <p class="mb-0">
                        <a href="{{ route('products.index') }}" class="btn btn-primary">
                            <i class="fas fa-shopping-bag me-2"></i> Start Shopping
                        </a>
                    </p>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
