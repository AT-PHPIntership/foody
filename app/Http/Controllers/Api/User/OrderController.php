<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use App\Models\Product;
use Illuminate\Http\Response;
use App\Models\Order;
use App\Http\Requests\User\CreateOrderRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderDetail;

class OrderController extends ApiController
{
    /**
    * Create order
    *
    * @param App\Http\Requests\CreateOrderRequest $request request
    *
    * @return \Illuminate\Http\Response
    */
    public function store(CreateOrderRequest $request)
    {
        $user = Auth::user();
        $products = json_encode($request->products);//return string
        //because $request->products has two parameter not be string (id, quantity), for example {id: 13, name: "Prof. Willie Rath", img: "images/products/image1.jpg", price: "77.612", quantity: 2}
        $products = json_decode($products);
        $request['user_id'] = $user->id;
        $request['payment_status'] = 0;
        $request['submit_time'] = Carbon::now()->toDateTimeString();
        $order = Order::create($request->all());
        foreach ($products as $product) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' =>$product->id,
                'quantity' => $product->quantity
            ]);
        }
        $order->load('orderdetails');
        return $this->successResponse($order, Response::HTTP_OK);
    }
}
