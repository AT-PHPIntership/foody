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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categoriesParent'] = Category::where('parent_id', 0)->get();
        return view('admin.pages.categories.create', $data);
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
        $obj = new Category;
        $obj->name = $request->name;
        $obj->parent_id = $request->parent_id;
        if ($obj->save()) {
            if ($request->parent_id == 0) {
                return redirect()->route('admin.categories.index')->with('message', '__(category.message.add)');
            } else {
                return redirect()->route('admin.categories.showChild', $request->parent_id)->with('message', '__(category.message.add)');
            }
        } else {
            return redirect()->route('admin.categories.create')->with('message', '__(category.message.add_fail)');
        }
    }
}
