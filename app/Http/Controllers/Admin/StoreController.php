<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Store;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::paginate(config('paginate.number_stores'));
        return view('admin.pages.stores.index', compact('stores'));
    }

    /**
     * Display the specified resource.
     *
     * @param Store $store Store
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return view('admin.pages.stores.show', compact('store'));
    }
}
