@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h1>Order #{{ $order->id }}</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Order Items</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderItems as $item)
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
                                        <td>₹{{ number_format($item->price, 2) }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>₹{{ number_format($item->price * $item->quantity, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3" class="text-end">Total:</th>
                                    <th>₹{{ number_format($order->total_amount, 2) }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Shipping Information</h5>
                </div>
                <div class="card-body">
                    <p><strong>Address:</strong> {{ $order->shipping_address }}</p>
                    <p><strong>City:</strong> {{ $order->shipping_city }}</p>
                    <p><strong>State:</strong> {{ $order->shipping_state }}</p>
                    <p><strong>Zip Code:</strong> {{ $order->shipping_zipcode }}</p>
                    <p><strong>Phone:</strong> {{ $order->shipping_phone }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Order Summary</h5>
                </div>
                <div class="card-body">
                    <p><strong>Order ID:</strong> #{{ $order->id }}</p>
                    <p><strong>Date:</strong> {{ $order->created_at->format('M d, Y h:i A') }}</p>
                    <p>
                        <strong>Status:</strong>
                        @if($order->status == 'pending')
                            <span class="badge bg-warning">Pending</span>
                        @elseif($order->status == 'processing')
                            <span class="badge bg-info">Processing</span>
                        @elseif($order->status == 'shipped')
                            <span class="badge bg-primary">Shipped</span>
                        @elseif($order->status == 'delivered')
                            <span class="badge bg-success">Delivered</span>
                        @elseif($order->status == 'cancelled')
                            <span class="badge bg-danger">Cancelled</span>
                        @endif
                    </p>
                    <p>
                        <strong>Payment Status:</strong>
                        @if($order->payment_status == 'pending')
                            <span class="badge bg-warning">Pending</span>
                        @elseif($order->payment_status == 'completed')
                            <span class="badge bg-success">Completed</span>
                        @elseif($order->payment_status == 'failed')
                            <span class="badge bg-danger">Failed</span>
                        @endif
                    </p>
                    <p><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
                    @if($order->transaction_id)
                        <p><strong>Transaction ID:</strong> {{ $order->transaction_id }}</p>
                    @endif
                    <hr>
                    <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
                </div>
            </div>

            <div class="d-grid gap-2">
                <a href="{{ route('orders.index') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left me-2"></i> Back to Orders
                </a>
                <a href="{{ route('products.index') }}" class="btn btn-outline-primary">
                    <i class="fas fa-shopping-bag me-2"></i> Continue Shopping
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
