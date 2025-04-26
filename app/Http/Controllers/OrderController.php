<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Hiển thị đơn hàng của người dùng
     */
    public function userOrders($user_id)
    {
        $user = User::findOrFail($user_id);

        // Load orders với tổng tiền tính toán thực tế từ orderDetails
        $orders = $user->orders()->with(['orderDetails.product'])
            ->get()
            ->each(function ($order) {
                // Tính lại tổng tiền từ chi tiết đơn hàng
                $order->calculated_total = $order->orderDetails->sum(function ($detail) {
                    return $detail->quantity * $detail->product->price;
                });
            });

        return view('orders.view', [
            'user' => $user,
            'orders' => $orders
        ]);
    }

    /**
     * Hiển thị chi tiết đơn hàng
     */
    public function orderDetail(Request $request)
    {
        $order_id = $request->get('order_id');
        $order = Order::with(['user', 'orderDetails.product'])->findOrFail($order_id);

        return view('orders.order_detail', [
            'order' => $order
        ]);
    }
}
