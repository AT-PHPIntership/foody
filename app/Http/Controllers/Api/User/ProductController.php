<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\ApiController;
use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends ApiController
{
    /**
     * Display a listing of the newest products for slide show.
     *
     * @param Illuminate\Http\Request $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->page) {
            $products = Product::with('category.parent', 'store', 'images')->filter($request)->paginate(config('define.limit_rows'));
            $products = $this->formatPaginate($products);
            return $this->showAll($products, Response::HTTP_OK);
        } else {
            $products = Product::with('category.parent', 'store', 'images')->filter($request)->get();
            return $this->showAll($products, Response::HTTP_OK);
        }
    }
}
