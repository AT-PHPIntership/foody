<?php
namespace App\Traits;

use Illuminate\Http\Request;
use App\Models\Category;

trait FilterTrait
{
    /**
     * Filter with request data
     *
     * @param \Illuminate\Database\Eloquent\Builder|static $query   query
     * @param \Illuminate\Http\Request                     $request request
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function scopeFilter($query, Request $request)
    {
        if ($request->newest_products) {
            return $query->orderBy('created_at', 'desc')->limit($request->newest_products);
        }
        if ($request->category_id) {
            if (isset($request->page)) {
                return $query->join('categories', function ($join) {
                    $join->on('categories.id', '=', 'products.category_id');
                })
                ->select('products.*')
                ->where('categories.parent_id', $request->category_id)
                ->orWhere('products.category_id', $request->category_id);
            } else {
                return $query->join('categories', function ($join) {
                    $join->on('categories.id', '=', 'products.category_id');
                })
                ->select('products.*')
                ->where('categories.parent_id', $request->category_id);
            }
        }
    }
}
