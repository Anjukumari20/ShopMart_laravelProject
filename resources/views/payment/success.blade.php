@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                    </div>
                    <h1 class="mb-4">Payment Successful!</h1>
                    <p class="lead">Thank you for your purchase. Your order has been successfully processed.</p>
                    <p><strong>Order ID:</strong> #{{ $order->id }}</p>
                    <p><strong>Transaction ID:</strong> {{ $order->transaction_id }}</p>
                    <p><strong>Total Amount:</strong> ₹{{ number_format($order->total_amount, 2) }}</p>

                    <hr class="my-4">

                    <h4 class="mb-3">Order Summary</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderItems as $item)
                                    <tr>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>₹{{ number_format($item->price, 2) }}</td>
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

                    <div class="mt-4">
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary me-2">
                            <i class="fas fa-eye me-2"></i> View Order Details
                        </a>
                        <a href="{{ route('products.index') }}" class="btn btn-outline-primary">
                            <i class="fas fa-shopping-bag me-2"></i> Continue Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
