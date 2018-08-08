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
     * @param int $id int
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::with('shopOpenStatus')->where('id', $id)->first();
        return view('admin.pages.stores.show', compact('store'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Store $store store
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        try {
            $store->shopOpenStatus->delete();
            $store->delete();
            return redirect()->route('admin.stores.index')->with('message', __('store.admin.message.del'));
        } catch (Exception $ex) {
            return redirect()->route('admin.stores.index')->with('message', __('store.admin.message.del_fail'));
        }
    }
}
