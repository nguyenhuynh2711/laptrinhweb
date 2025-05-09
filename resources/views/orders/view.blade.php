@extends('dashboard')

@section('content')
<link href="{{ asset('css/order.css') }}" rel="stylesheet">

<main class="order-container">
    <div class="order-header">
        <h1>Order Management</h1>
        <div class="user-info">
            <h2>User: <span>{{ $user->name }}</span></h2>
            <p>User ID: {{ $user->id }} | Email: {{ $user->email }}</p>
        </div>
    </div>

    <div class="order-summary">
        <h3>Order Summary</h3>
        <div class="table-responsive">
            <table class="order-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Total Amount</th>
                        <th>Address</th>
                        <th>Order Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    <tr>
                        <td>#{{ $order->id }}</td>

                        <td>
                            {{ number_format($order->calculated_total) }} đ
                            @if($order->total_amount != $order->calculated_total)
                            <span class="amount-warning" title="Tổng tiền không khớp với chi tiết đơn hàng">
                                (!)
                            </span>
                            @endif
                        </td>

                        <td>{{ $order->address }}</td>
                        <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="no-orders">No orders found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if($orders->count() > 0)
    <div class="order-details">
        <h3>Order Details</h3>
        <div class="table-responsive">
            <table class="detail-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Subtotal</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    @foreach($order->orderDetails as $detail)
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>
                            <div class="product-info">
                                <span class="product-name">{{ $detail->product->name }}</span>
                            </div>
                        </td>
                        <td>{{ $detail->quantity }}</td>
                        <td>{{ number_format($detail->product->price) }} đ</td>
                        <td>{{ number_format($detail->quantity * $detail->product->price) }} đ</td>
                        <td class="notes">{{ $detail->notes ?? 'N/A' }}</td>
                    </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
</main>
@endsection