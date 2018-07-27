<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'parent_id'
    ];

    /**
     * Relationship hasMany with Like
     *
     * @return array
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Count sub categories
     *
     * @param int $id Integer
     *
     * @return int
     */
    public function countChild($id)
    {
        return Category::where('parent_id', $id)->count();
    }

    /**
     * Count parent categories
     *
     * @return int Integer
     */
    public static function countParents()
    {
        return Category::where('parent_id', 0)->count();
    }
}
