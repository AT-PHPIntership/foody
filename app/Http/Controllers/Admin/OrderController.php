<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('user')->withCount('orderdetails')->orderBy('created_at', 'desc')->paginate(config('paginate.number_orders'));
        return view('admin.pages.orders.index', compact('orders'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order Order
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        try {
            $order->orderDetails()->delete();
            $order->delete();
            return redirect()->route('admin.orders.index')->with('message', __('order.admin.message.del'));
        } catch (Exception $ex) {
            return redirect()->route('admin.orders.index')->with('message', __('order.admin.message.del_fail'));
        }
    }
}
