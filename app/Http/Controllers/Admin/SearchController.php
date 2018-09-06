<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Store;
use App\Models\Product;
use Carbon\Carbon;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        switch ($request->option) {
            case 'user':
                $users = User::where('username', 'like', '%' . $request->keyword . '%')
                            ->orWhere('full_name', 'like', '%' . $request->keyword . '%')
                            ->sortable()->orderBy('created_at', 'desc')->paginate(config('paginate.number_products'));
                return view('admin.pages.search', compact('users'));
                break;
            case 'store':
                $stores = Store::where('name', 'like', '%' . $request->keyword . '%')
                            ->sortable()->orderBy('created_at', 'desc')->paginate(config('paginate.number_products'));
                return view('admin.pages.search', compact('stores'));
                break;
            case 'product':
                $products = Product::where('name', 'like', '%' . $request->keyword . '%')
                                ->sortable()->orderBy('created_at', 'desc')->paginate(config('paginate.number_products'));
                return view('admin.pages.search', compact('products'));
                break;
        }
        
    }
}
