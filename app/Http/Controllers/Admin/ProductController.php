<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\Category;
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
        $categories = Category::pluck('name', 'id');
        return view('admin.pages.products.index', compact('products', 'categories'));
    }

    /**
    * Display the specified resource.
    *
    * @param int $id id

    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $stores = Store::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');
        $product = Product::with('images')->find($id);
        return view('admin.pages.products.show', compact('product', 'stores', 'categories'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @param App\Models\Product $product product

    * @return \Illuminate\Http\Response
    */
    public function create(Product $product)
    {
        $stores = Store::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');
        return view('admin.pages.products.create', compact('product', 'stores', 'categories'));
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
        try {
            $product = Product::create($request->all());
            if (is_array(request()->file('path'))) {
                foreach (request()->file('path') as $image) {
                    $newImage = $image->getClientOriginalName();
                    $image->move(public_path(config('define.product.images_path_products')), $newImage);
                    $imagesData[] = [
                        'product_id' => $product->id,
                        'path' => $newImage
                    ];
                }
                $product->images()->createMany($imagesData);
            }
            return redirect()->route('admin.products.index')->with('message', __('product.admin.create.create_success'));
        } catch (Exception $ex) {
            return redirect()->route('admin.products.index')->with('alert', __('product.admin.create.create_fali'));
        }
    }
}
