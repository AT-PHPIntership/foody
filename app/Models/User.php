<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'full_name',  'birthday', 'gender', 'phone', 'email', 'password', 'role_id', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'deleted_at'
    ];

    /**
    * Get Order of User
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
