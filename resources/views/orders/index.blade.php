@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h1>My Orders</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @if($orders->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Payment Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>#{{ $order->id }}</td>
                                            <td>{{ $order->created_at->format('M d, Y') }}</td>
                                            <td>
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
                                            </td>
                                            <td>
                                                @if($order->payment_status == 'pending')
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif($order->payment_status == 'completed')
                                                    <span class="badge bg-success">Completed</span>
                                                @elseif($order->payment_status == 'failed')
                                                    <span class="badge bg-danger">Failed</span>
                                                @endif
                                            </td>
                                            <td>₹{{ number_format($order->total_amount, 2) }}</td>
                                            <td>
                                                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    {{ $orders->links() }}
                </div>
            @else
                <div class="alert alert-info">
                    <h4 class="alert-heading">No orders found!</h4>
                    <p>You haven't placed any orders yet.</p>
                    <hr>
                    <p class="mb-0">
                        <a href="{{ route('products.index') }}" class="btn btn-primary">
                            <i class="fas fa-shopping-bag me-2"></i> Start Shopping
                        </a>
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
