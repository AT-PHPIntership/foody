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
        if ($request->filter == 'hotest') {
            $categories = Category::where('parent_id', 0)->get();
            foreach ($categories as $category) {
                $category['products'] = Product::with(['store', 'images'])->filter($request, $category->id)->get();
            }
            return $this->showAll($categories, Response::HTTP_OK);
        } else if ($request->page) {
            $products = Product::with('category.parent', 'store', 'images')->filter($request)->paginate(config('define.limit_rows'));
            $products = $this->formatPaginate($products);
            return $this->showAll($products, Response::HTTP_OK);
        } else {
            $products = Product::with('category.parent', 'store', 'images')->filter($request)->get();
            return $this->showAll($products, Response::HTTP_OK);
        }

        $perPage = isset($request->perpage) ? $request->perpage : config('define.limit_rows');

        $products = Product::filter($request)->with('category.parent', 'images')
             ->when(isset($request->sortBy), function ($query) use ($request) {
                 return $query->orderBy($request->sortBy, $request->order);
             })
             ->when(isset($request->limit), function ($query) use ($request) {
                 return $query->limit($request->limit);
             })->paginate($perPage);

             $products->appends(request()->query());

        $products = $this->formatPaginate($products);
        return $this->showAll($products, Response::HTTP_OK);
    }

    /**
     * Display a listing of the resource.
     *
     * @param App\Models\Product $product product
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->images;
        return $this->showOne($product, Response::HTTP_OK);
    }
}
