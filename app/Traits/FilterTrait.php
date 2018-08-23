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
    }
}
