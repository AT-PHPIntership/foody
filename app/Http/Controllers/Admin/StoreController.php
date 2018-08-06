<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Http\Requests\Admin\CreateStoreRequest;
use Illuminate\Http\Response;
use App\Models\ShopOpeningStatus;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::sortable()->paginate(config('paginate.number_stores'));
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
    * @param Http\Requests\CreateStoreRequest $request request
    *
    * @return \Illuminate\Http\Response
    */
    public function store(CreateStoreRequest $request)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $newImage = config('define.images_path_stores')."/".time() . '-' . str_random(8) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path(config('define.images_path_stores'));
                $data['image'] = $newImage;
                $image->move($destinationPath, $newImage);
            }
            $store = Store::create($data);
            ShopOpeningStatus::create([
                'store_id' => $store->id,
                'time_open' => $data['time_open'],
                'time_close' => $data['time_close'],
            ]);
            return redirect()->route('admin.stores.index')->with('message', __('store.admin.message.add'));
        } catch (Exception $ex) {
            return redirect()->route('admin.stores.create')->with('message', __('store.admin.message.add_fail'));
        }
    }
}
