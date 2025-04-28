@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-times-circle text-danger" style="font-size: 5rem;"></i>
                    </div>
                    <h1 class="mb-4">Payment Cancelled</h1>
                    <p class="lead">Your payment has been cancelled. No charges have been made.</p>
                    
                    <div class="mt-4">
                        <a href="{{ route('cart.index') }}" class="btn btn-primary me-2">
                            <i class="fas fa-shopping-cart me-2"></i> Return to Cart
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
