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
        'name', 'email', 'password', 'phone', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function auctions(){
        return $this->hasMany('App\Auction','seller_id');
    }

    public function bids(){
        return $this->hasMany('App\Bid','bidder_id');
    }

    public function isAdmin()
    {
        return $this->admin;
    }
}
