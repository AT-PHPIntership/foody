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
     * @param Category $category Category
     *
     * @return \Illuminate\Http\Response Response
     */
    public function showChild(Category $category)
    {
        $data['categoriesChild'] = $category->children()->paginate(config('paginate.number_categories'));
        $data['categoriesParent'] = $category;
        return view('admin.pages.categories.showChild', $data);
    }
}
