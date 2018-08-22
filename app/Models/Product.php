<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'describe', 'price', 'store_id', 'category_id'
    ];

    /**
     * Get Category Object
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Get Store Object
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }

    /**
     * Get Images of Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(Image::class, 'product_id', 'id');
    }

    /**
     * Get OrderDetail Object
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query      Builder
     * @param int                                   $categoryId int
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeProductsParentCategory($query, $categoryId)
    {
        return $query->join('categories', function ($join) {
            $join->on('categories.id', '=', 'products.category_id');
        })
        ->select('products.*')
        ->where('categories.parent_id', '=', $categoryId)
        ->orWhere('products.category_id', '=', $categoryId)
        ->take(8)
        ->get();
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query      Builder
     * @param int                                   $categoryId int
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeProductsCategoryPaginate($query, $categoryId, $offset)
    {
        return $query->join('categories', function ($join) {
            $join->on('categories.id', '=', 'products.category_id');
        })
        ->select('products.*')
        ->where('categories.parent_id', '=', $categoryId)
        ->orWhere('products.category_id', '=', $categoryId)
        ->skip($offset*2)->take(2)
        ->get();
    }
}
