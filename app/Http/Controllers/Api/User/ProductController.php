<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\ApiController;
use App\Models\Product;
use Illuminate\Http\Response;
use App\Models\Category;

class ProductController extends ApiController
{
    /**
     * Display a listing of the newest products for slide show.
     *
     * @param Illuminate\Http\Request $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function newestProductsSlide(Request $request)
    {
        $newestProductsSlide = Product::with(['store','images'])->orderBy('created_at')->take($request->number_products)->get();
        return $this->showAll($newestProductsSlide, Response::HTTP_OK);
    }

    /**
     * Display a listing of the newest products for slide show.
     *
     * @param Illuminate\Http\Request $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function showHomePageProducts(Request $request)
    {
        $productsInCategory = Product::with(['store', 'images'])->where('category_id', $request->category_id)->orderBy('created_at')->take(8)->get();
        return $this->showAll($productsInCategory, Response::HTTP_OK);
    }
}
