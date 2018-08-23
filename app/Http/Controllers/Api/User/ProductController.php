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
    public function index(Request $request)
    {
        $offset = isset($request->offset) ? $request->offset : 0;
        $products = Product::with('store', 'images')->filter($request)->get();
        return $this->showAll($products, Response::HTTP_OK);
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request request content
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $offset = isset($request->offset) ? $request->offset : 0;
        $products = Product::filter($request)->with('category', 'images', 'store')
            ->paginate(2);
        // $urlEnd = ends_with(config('app.url'), '/') ? '' : '/';
        // foreach ($products as $product) {
        //     $product['price_formated'] = number_format($product['price']);
        //     $product['image_path'] = config('app.url') . $urlEnd . config('define.product.upload_image_url');
        // }
        $products->appends(request()->query());
        $products = $this->formatPaginate($products);
        return $this->showAll($products, Response::HTTP_OK);
    }
}
