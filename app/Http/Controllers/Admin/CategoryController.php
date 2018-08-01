<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Http\Requests\Admin\EditCategoryRequest;
use Mockery\Exception;

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data['category'] = $category;
        $data['categoriesParent'] = Category::where('parent_id', 0)->get();
        return view('admin.pages.categories.edit', $data);
    }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  EditCategoryRequest $request EditCategoryRequest
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
    public function update(EditCategoryRequest $request, Category $category)
    {
        try {
            $category->name = $request->name;
            $category->parent_id = $request->parent_id != null ? $request->parent_id : 0;
            $category->save();
            if ($category) {
                if ($request->parent_id == 0) {
                    return redirect()->route('admin.categories.index')->with('message', __('category.admin.message.edit'));
                } else {
                    return redirect()->route('admin.categories.showChild', $request->parent_id)->with('message', __('category.admin.message.edit'));
                }
            } else {
                return redirect()->route('admin.categories.edit')->with('message', __('category.admin.message.edit_fail'));
            }
        } catch (Exception $ex) {
            return $ex;
        }
    }
}
