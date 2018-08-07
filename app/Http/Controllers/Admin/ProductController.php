<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('images')->orderBy('created_at', 'desc')->paginate(config('paginate.number_products'));
        return view('admin.pages.products.index', compact('products'));
    }

    /**
    * Display the specified resource.
    *
    * @param int $id id

    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $product = Product::with('images')->find($id);
        return view('admin.pages.products.show', compact('product'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Http\Requests\CreateProductRequest $request request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $userData = $request->all();
        Product::create($userData);
        return redirect()->route('admin.products.index')->with('message', __('product.admin.create.create_success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param App\Models\Product $product product
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, Store $store)
    {

        return view('admin.pages.products.edit', compact('product'));
    }
}
