@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h1>Payment</h1>
            <hr>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Complete Your Payment</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-info mb-4">
                        <h5 class="alert-heading">Demo Payment</h5>
                        <p>This is a demo payment page. In a real application, you would integrate with a payment gateway like Stripe or PayPal.</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5>Order Details</h5>
                        <p><strong>Order ID:</strong> #{{ $order->id }}</p>
                        <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
                        <p><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
                    </div>
                    
                    @if($order->payment_method == 'credit_card')
                        <form action="{{ route('payment.complete', $order->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="card_number" class="form-label">Card Number</label>
                                <input type="text" class="form-control" id="card_number" placeholder="1234 5678 9012 3456" required>
                                <small class="text-muted">For demo purposes, any valid-looking card number will work.</small>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="expiry_date" class="form-label">Expiry Date</label>
                                    <input type="text" class="form-control" id="expiry_date" placeholder="MM/YY" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cvv" placeholder="123" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="card_name" class="form-label">Name on Card</label>
                                <input type="text" class="form-control" id="card_name" placeholder="John Doe" required>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-lock me-2"></i> Pay ${{ number_format($order->total_amount, 2) }}
                                </button>
                                <a href="{{ route('payment.cancel') }}" class="btn btn-outline-danger">
                                    <i class="fas fa-times me-2"></i> Cancel Payment
                                </a>
                            </div>
                        </form>
                    @else
                        <div class="text-center mb-4">
                            <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="PayPal Checkout">
                        </div>
                        
                        <div class="d-grid gap-2">
                            <form action="{{ route('payment.complete', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    <i class="fab fa-paypal me-2"></i> Pay with PayPal
                                </button>
                            </form>
                            <a href="{{ route('payment.cancel') }}" class="btn btn-outline-danger">
                                <i class="fas fa-times me-2"></i> Cancel Payment
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
