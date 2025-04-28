<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Process payment for an order.
     *
     * @param  int  $orderId
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function process($orderId)
    {
        $order = \App\Models\Order::where('user_id', Auth::id())
            ->where('id', $orderId)
            ->where('payment_status', 'pending')
            ->firstOrFail();

        return view('payment.process', compact('order'));
    }

    /**
     * Complete payment for an order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $orderId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function complete(Request $request, $orderId)
    {
        $order = \App\Models\Order::where('user_id', Auth::id())
            ->where('id', $orderId)
            ->where('payment_status', 'pending')
            ->firstOrFail();

        // In a real application, you would process the payment with Stripe or PayPal here
        // For this example, we'll just mark the payment as completed

        $order->update([
            'payment_status' => 'completed',
            'status' => 'processing',
            'transaction_id' => 'DEMO-' . uniqid()
        ]);

        return redirect()->route('payment.success', $order->id);
    }

    /**
     * Show payment success page.
     *
     * @param  int  $orderId
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function success($orderId)
    {
        $order = \App\Models\Order::where('user_id', Auth::id())
            ->where('id', $orderId)
            ->with('orderItems.product')
            ->firstOrFail();

        return view('payment.success', compact('order'));
    }

    /**
     * Show payment cancel page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cancel()
    {
        return view('payment.cancel');
    }
}
