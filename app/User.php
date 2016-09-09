<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'last_name', 'username', 'type', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function scopeOrderid($query){
        return $query->orderBy('id', 'ASC')->paginate(5);
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function admin(){
        return $this->type === 'admin';
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
