<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\CreateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response Response
     */
    public function index()
    {
        $categoriesParent = Category::where('parent_id', 0)->paginate(config('paginate.number_categories'));
        return view('admin.pages.categories.index', compact('categoriesParent'));
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
        $categoriesChild = $category->children()->paginate(config('paginate.number_categories'));
        $categoriesParent = $category;
        return view('admin.pages.categories.showChild', compact('categoriesChild', 'categoriesParent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriesParent = Category::where('parent_id', 0)->get();
        return view('admin.pages.categories.create', compact('categoriesParent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param App\Http\Requests\Admin\CreateCategoryRequest $request CreateCategoryRequest
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        try {
            $data = $request->all();
            $category = Category::create($data);
            if ($category) {
                if ($request->parent_id == 0) {
                    return redirect()->route('admin.categories.index')->with('message', __('category.admin.message.add'));
                } else {
                    return redirect()->route('admin.categories.showChild', $request->parent_id)->with('message', __('category.admin.message.add'));
                }
            } else {
                return redirect()->route('admin.categories.create')->with('message', __('category.admin.message.add_fail'));
            }
        } catch (Exception $ex) {
            return redirect()->route('admin.categories.create')->with('message', __('category.admin.message.add_fail'));
        }
    }
}
