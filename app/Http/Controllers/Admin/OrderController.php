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
        $orders = Order::with('user')->withCount('orderdetails')->paginate(config('paginate.number_orders'));
        return view('admin.pages.orders.index', compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id int
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with('user')->where('id', $id)->first();
        $detailOrders = $order->orderDetails();
        return view('admin.pages.orders.show', compact('order'));
    }
}
