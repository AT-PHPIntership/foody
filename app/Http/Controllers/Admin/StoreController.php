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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.stores.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param Http\Requests\CreateUserRequest $request request
    *
    * @return \Illuminate\Http\Response
    */
    public function store(CreateUserRequest $request)
    {
        $userData = $request->all();
        User::create($userData);
        return redirect()->route('admin.users.index')->with('message', __('user.admin.create.create_success'));
    }
}
