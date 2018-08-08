<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\Category;
use App\Models\Image;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;

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
    public function edit(Product $product)
    {
        $stores = Store::all();
        $categories = Category::all();
        $images = Image::all();
        return view('admin.pages.products.edit', compact('product', 'stores', 'categories', 'images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request request
     * @param App\Models\Product       $product product
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try {
            $updateProduct = $request->except(["_token", "_method", "submit"]);
            $product->update($updateProduct);
            return redirect()->route('admin.products.index')->with('message', __('product.admin.edit.update_success'));
        } catch (Exception $e) {
            return redirect()->route('admin.products.index')->with('alert', __('product.admin.edit.update_fail'));
        }
    }

    /**
      * Remove the specified resource from storage.
      *
      * @param App\Models\Product $product product
      *
      * @return \Illuminate\Http\Response
      */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('admin.products.index')->with('message', __('user.admin.delete_success'));
        } catch (Exception $e) {
            return redirect()->route('admin.products.index')->with('alert', __('user.admin.delete_fail'));
        }
    }
}
