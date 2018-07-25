<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'phone', 'describe', 'image', 'is_active'
    ];

    /**
     * Get ShopOpenStatus Object
     *
     * @return array
     */
    public function shopOpenStatus()
    {
        return $this->hasOne(ShopOpenStatus::class, 'store_id', 'id');
    }

    /**
     * Get Products of Store
     *
     * @return array
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'store_id', 'id');
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
