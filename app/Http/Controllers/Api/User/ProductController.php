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
        $newestProductsSlide = Product::with('store', 'images')->filter($request);
        return $this->showAll($newestProductsSlide, Response::HTTP_OK);
    }
}
