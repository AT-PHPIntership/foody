<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response Response
     */
    public function index()
    {
        $data['categoriesParent'] = Category::where('parent_id', 0)->paginate(config('paginate.number_categories'));
        return view('admin.pages.categories.index', $data);
    }

    /**
     * Show all sub categories of Parent Category
     *
     * @param int $idParent Integer
     *
     * @return \Illuminate\Http\Response Response
     */
    public function showChild($idParent)
    {
        $data['categoriesChild'] = Category::where('parent_id', $idParent)->paginate(config('paginate.number_categories'));
        return view('admin.pages.categories.showChild', $data);
    }
}
